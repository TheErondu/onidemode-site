<!-- resources/views/emails/admin_logged_in.blade.php -->
@extends('layouts.mail')

@section('title', 'Admin Login Notification')

@section('content')
    <h1>Admin Login Alert</h1>
    <p>Dear {{ $details['user']['name'] }},</p>

    <p>This is to notify you that an admin account has successfully logged into the system. Below are the login details:</p>

    <ul>
        <li><strong>Admin Name:</strong> {{ $details['user']['name'] }}</li>
        <li><strong>Email:</strong> {{ $details['user']['email'] }}</li>
        <li><strong>Login Time:</strong> {{ \App\Utils\CustomFormatter::formatDate($details['login_time']) }} </li>

    </ul>

    <p>If this login was not initiated by you, please contact the technical support team immediately to secure your account.
    </p>

    <p>
        If you have any questions, please contact us at
        <a href="mailto:{{ config('settings.site_contact_email') }}">{{ config('settings.site_contact_email') }}</a>
    </p>

    <p>Stay secure,<br>ONIDEMODE System Adminstration</p>
@endsection
