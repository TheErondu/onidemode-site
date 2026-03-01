@extends('emails.layout')

@section('title', $details['title'] . ' – ONÍDÈMỌDÈ')

@section('content')

    <h1 style="margin:0 0 6px;font-family:Georgia,serif;font-size:26px;color:#1F1F25;font-weight:normal;">
        {{ $details['title'] }}
    </h1>
    <p style="margin:0 0 25px;font-family:Georgia,serif;font-size:13px;color:#B19777;letter-spacing:2px;text-transform:uppercase;">
        System Notification
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
        <tr><td style="background-color:#B19777;height:1px;font-size:1px;line-height:1px;">&nbsp;</td></tr>
    </table>

    <p style="margin:0 0 20px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        Hi {{ $details['user']['name'] }},
    </p>

    <p style="margin:0 0 28px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        {{ $details['body'] }}
    </p>

    @if(!empty($details['cta_link']))
    <!-- CTA -->
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:28px;">
        <tr>
            <td style="background-color:#B19777;">
                <a href="{{ $details['cta_link'] }}"
                   style="display:inline-block;padding:13px 32px;font-family:Arial,sans-serif;font-size:13px;font-weight:bold;color:#ffffff;text-decoration:none;letter-spacing:2px;text-transform:uppercase;">
                    View Changes
                </a>
            </td>
        </tr>
    </table>
    @endif

    <p style="margin:0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;line-height:1.6;">
        If you have any questions, contact us at
        <a href="mailto:admin@onidemodegameshow.com" style="color:#B19777;text-decoration:none;">admin@onidemodegameshow.com</a>
    </p>

@endsection
