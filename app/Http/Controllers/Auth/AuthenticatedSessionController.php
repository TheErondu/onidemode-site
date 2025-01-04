<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\AdminLoggedIn;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        // Fetch the latest session
        $session = DB::table('sessions')
            ->where('user_id', $user->id) // If user_id is stored
            ->latest('last_activity') // Use the `last_activity` column to get the latest session
            ->first();

        $details = [
            "user" => $user,
            "ip_address" => $session->ip_address,
            "user_agent" => $session->user_agent,
            "login_time" => now()->toDateTimeString(),
        ];
        // Send an email with the session details
        Mail::to($user->email)->queue(new AdminLoggedIn($details));

        return redirect()->intended(route('back-office', absolute: false));
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
