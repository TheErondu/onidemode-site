<!-- resources/views/emails/participant_registration_success.blade.php -->
@extends('layouts.mail')

@section('title', 'Registration Confirmed!')

@section('content')
    <h1>Welcome Aboard, {{ $details['first_name'] }}!</h1>
    <p>Hi {{ $details['first_name'] }},</p>
    <p>We're thrilled to confirm your registration for our interactive game show! 🎉 Your payment of <strong>{{ config('settings.participant_registration_fee') }}</strong>
        has been successfully received.</p>

    <p><strong>Here are your registration details:</strong></p>
    <ul>
        <li><strong>Name:</strong> {{ $details['first_name'] }} {{ $details['last_name'] }}.</li>
        <li><strong>Email:</strong> {{ $details['email'] }}</li>
        <li><strong>Preferred Availability:</strong> {{ implode(', ', $details['availability'] ?? []) }}.</li>
        <li><strong>Proposed Date:</strong> {{\App\Utils\CustomFormatter::formatDate( $details['proposed_date'])}}.</li>
    </ul>
    <br>
    <p>What's next? Our team will be in touch soon with additional details about the show, including the schedule and any
        preparation tips. Keep an eye on your email inbox!</p>

@endsection
