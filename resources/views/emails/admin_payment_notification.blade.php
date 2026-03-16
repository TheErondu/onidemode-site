@extends('emails.layout')

@section('title', 'Payment Notification – ONÍDÈMỌDÈ')

@section('content')

    <h1 style="margin:0 0 6px;font-family:Georgia,serif;font-size:26px;color:#1F1F25;font-weight:normal;">
        Payment {{ $details['status'] === 'success' ? 'Received' : 'Failed' }}
    </h1>
    <p style="margin:0 0 25px;font-family:Georgia,serif;font-size:13px;color:{{ $details['status'] === 'success' ? '#2d7a2d' : '#B13333' }};letter-spacing:2px;text-transform:uppercase;">
        {{ $details['status'] === 'success' ? 'Successful Transaction' : 'Failed Transaction' }}
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
        <tr><td style="background-color:#B19777;height:1px;font-size:1px;line-height:1px;">&nbsp;</td></tr>
    </table>

    <p style="margin:0 0 20px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        A payment attempt has been processed on the Onidemode Game Show registration portal.
    </p>

    <!-- Details card -->
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
           style="background-color:#f8f6f3;border-left:4px solid {{ $details['status'] === 'success' ? '#2d7a2d' : '#B13333' }};margin-bottom:28px;">
        <tr>
            <td style="padding:22px 25px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">

                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;width:40%;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Status
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:{{ $details['status'] === 'success' ? '#2d7a2d' : '#B13333' }};font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ strtoupper($details['status']) }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Participant Name
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $details['first_name'] }} {{ $details['last_name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Email
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $details['email'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Amount
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            ₦{{ number_format($details['amount'] / 100, 2) }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;">
                            Reference
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;">
                            {{ $details['reference'] }}
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

    <!-- CTA -->
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:28px;">
        <tr>
            <td style="background-color:#B19777;">
                <a href="{{ route('admin.payments.manage') }}"
                   style="display:inline-block;padding:13px 32px;font-family:Arial,sans-serif;font-size:13px;font-weight:bold;color:#ffffff;text-decoration:none;letter-spacing:2px;text-transform:uppercase;">
                    View Payments
                </a>
            </td>
        </tr>
    </table>

@endsection
