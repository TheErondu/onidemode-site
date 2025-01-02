<!-- resources/views/emails/admin_logged_in.blade.php -->
@extends('layouts.mail')

@section('title', 'Admin Login Notification')

@section('content')
    <h1>Admin Login Alert</h1>
    <p>Dear {{ $details['admin_name'] }},</p>

    <p>This is to notify you that an admin account has successfully logged into the system. Below are the login details:</p>

    <ul>
        <li><strong>Admin Name:</strong> {{ $details['admin_name'] }}</li>
        <li><strong>Email:</strong> {{ $details['admin_email'] }}</li>
        <li><strong>Login Time:</strong> {{ $details['login_time']->format('D, M d, Y h:i A') }}</li>
        <li><strong>IP Address:</strong> {{ $details['ip_address'] }}</li>
    </ul>

    <p>If this login was not initiated by you, please contact the technical support team immediately to secure your account.</p>

    <p>
        If you have any questions, please contact us at
        <a href="mailto:{{ config('settings.site_contact_email') }}">{{ config('settings.site_contact_email') }}</a>
    </p>

    <p>Stay secure,<br>ONIDEMODE System Adminstration</p>
@endsection
