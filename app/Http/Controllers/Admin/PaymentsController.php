<?php

namespace App\Http\Controllers\Admin;

use App\DTO\ParticipantDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\ParticipantController;
use App\Mail\ParticipantRegistered;
use App\Models\GameEntry;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Unicodeveloper\Paystack\Facades\Paystack as Paystack;

class PaymentsController extends Controller
{
    /**
     * Show manage Payments Page
     */
    public function index()
    {
        $payments = Payment::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard.payments.index', compact('payments'));
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
            'gender' => 'required|in:Male,Female,Other', // Ensure valid gender values
            'age' => 'required|integer|min:0|max:120', // Validate age as a positive integer
            'address' => 'required|string|max:500', // Limit the address length
            'proficiency' => 'required|string|max:255', // Validate proficiency as a string
            'read_write' => 'required|in:Yes,No', // Ensure it matches expected options
            'availability' => 'required|array|min:1', // Validate availability as an array
            'availability.*' => 'string|max:255', // Validate each availability entry
            'proposed_date' => 'required|date|after_or_equal:today', // Ensure the date is valid and not in the past
            'interest_reason' => 'nullable|string|max:500', // Optional with a max length
            'experience' => 'nullable|string|max:500', // Optional with a max length
            'skills' => 'nullable|string|max:500', // Optional with a max length
            'additional_info' => 'nullable|string|max:1000', // Optional with a longer max length
            'recording_consent' => 'required|in:Yes,No', // Ensure it matches expected options
            'rules_agreement' => 'required|in:Yes,No', // Ensure it matches expected options
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
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'address' => $request->address,
                    'proficiency' => $request->proficiency,
                    'read_write' => $request->read_write === 'Yes' ? 1 : 0,
                    'availability' => $request->availability, // Array data can be handled as needed
                    'proposed_date' => $request->proposed_date,
                    'interest_reason' => $request->interest_reason,
                    'experience' => $request->experience,
                    'skills' => $request->skills,
                    'additional_info' => $request->additional_info,
                    'recording_consent' => $request->recording_consent === 'Yes' ? 1 : 0,
                    'rules_agreement' => $request->rules_agreement === 'Yes' ? 1 : 0,
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

                Mail::to($newParticipant->email)->queue(new ParticipantRegistered($paymentDetails['data']['metadata']));

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
