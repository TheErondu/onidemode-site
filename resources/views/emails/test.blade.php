@extends('emails.layout')

@section('title', $data['subject'] . ' – ONÍDÈMỌDÈ')

@section('content')

    <h1 style="margin:0 0 6px;font-family:Georgia,serif;font-size:26px;color:#1F1F25;font-weight:normal;">
        {{ $data['subject'] }}
    </h1>
    <p style="margin:0 0 25px;font-family:Georgia,serif;font-size:13px;color:#B19777;letter-spacing:2px;text-transform:uppercase;">
        Test Email
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
        <tr><td style="background-color:#B19777;height:1px;font-size:1px;line-height:1px;">&nbsp;</td></tr>
    </table>

    <p style="margin:0;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        {{ $data['message'] }}
    </p>

@endsection
