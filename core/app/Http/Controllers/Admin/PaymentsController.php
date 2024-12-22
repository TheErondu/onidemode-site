<?php

namespace App\Http\Controllers\Admin;

use App\DTO\ParticipantDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\ParticipantController;
use App\Models\GameEntry;
use App\Models\Payment;
use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack as Paystack;

class PaymentsController extends Controller
{
    /**
     * Show manage Payments Page
     */
    public function index()
    {
        $payments = Payment::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard.payments.index',compact('payments'));
    }
    /**
     * Redirect to Paystack Payment Page
     */
    public function redirectToGateway(Request $request)
    {
        // Validate input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\+?\d{10,15}$/',
        ]);

        try {
            // Set payment details
            $amount = (int) config('settings.participant_registration_fee', '1000');
            $data = [
                'email' => $request->email,
                'amount' => $amount * 100, // Paystack expects amount in kobo
                'reference' => Paystack::genTranxRef(),
                'currency' => 'NGN',
                'callback_url' => route('payment.callback'),
                'metadata' => [
                    'phone' => $request->phone,
                    'first_name' => $request->first_name, // Explicitly include first_name
                    'last_name' => $request->last_name,   // Explicitly include last_name
                    'email' => $request->email,
                ],
            ];

            // Redirect to Paystack payment page
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while processing your payment: ' . $e->getMessage());
        }
    }

    /**
     * Handle Paystack Payment Callback
     */
    public function handleGatewayCallback()
    {
        // Retrieve payment details from Paystack
        $paymentDetails = Paystack::getPaymentData();

        // Check if the payment was successful
        if ($paymentDetails['data']['status'] === 'success') {
            $reference = $paymentDetails['data']['reference'];
            // Extract participant details
            $participantDetails = ParticipantDTO::fromArray($paymentDetails['data']['metadata']);

            // Step 1: Create a new participant
            $newParticipant = ParticipantController::createParticipant($participantDetails);

            // Check for existing payment using the unique reference
            $payment = Payment::where('reference', $reference)->first();

            if (!$payment) {
                // Payment does not exist, create a new payment
                $payment = Payment::create([
                    'participant_id' => $newParticipant->id, // or the participant ID
                    'amount' => $paymentDetails['data']['amount'],
                    'status' => 'success',
                    'reference' => $reference,
                    'paid_at' => now(),
                ]);

                // Create the corresponding game entry
                GameEntry::create([
                    'participant_id' => $payment->participant_id,
                    'payment_id' => $payment->id,
                    'played' => false,
                ]);

                // Return the registration complete view
                return view('frontend.registration-complete', compact('newParticipant'));
            } else {
                // Payment failed, redirect back to registration with error
                return redirect()->route('frontend.participants.register')->withErrors('Payment failed. Duplicate transaction detected!');
            }
        } else {
            // Payment failed, redirect back to registration with error
            return redirect()->route('frontend.participants.register')->withErrors('Payment failed. Please try again.');
        }
    }
}
