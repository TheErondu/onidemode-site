<!-- resources/views/emails/welcome.blade.php -->
@extends('layouts.mail')

@section('content')
    <h1>{{ $details['title'] }}</h1>
    <p>Hi {{ $details['user']['name'] }},</p>
    {{ $details['body'] }}
    <br>
    <a href="{{ $details['cta_link'] }}" class="button">View Changes</a>

    <p>If you have any questions, our support team is always here to help.</p>

    <p>Best regards,<br>The Team</p>
@endsection
