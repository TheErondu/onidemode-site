@extends('emails.layout')

@section('title', 'Registration Confirmed – ONÍDÈMỌDÈ')

@section('content')

    <h1 style="margin:0 0 6px;font-family:Georgia,serif;font-size:26px;color:#1F1F25;font-weight:normal;">
        Welcome, {{ $details['first_name'] }}!
    </h1>
    <p style="margin:0 0 25px;font-family:Georgia,serif;font-size:13px;color:#B19777;letter-spacing:2px;text-transform:uppercase;">
        Registration Confirmed
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
        <tr><td style="background-color:#B19777;height:1px;font-size:1px;line-height:1px;">&nbsp;</td></tr>
    </table>

    <p style="margin:0 0 20px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        Thank you for registering for the <strong>ONÍDÈMỌDÈ Game Show</strong>. Your payment has been confirmed and your application is now on record. Below is a summary of your submitted details.
    </p>

    <!-- Details card -->
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
           style="background-color:#f8f6f3;border-left:4px solid #B19777;margin-bottom:28px;">
        <tr>
            <td style="padding:22px 25px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">

                    @php
                        $rows = [
                            ['Full Name',            $details['first_name'] . ' ' . $details['last_name']],
                            ['Email',                $details['email']],
                            ['Phone',                $details['phone']],
                            ['Gender',               $details['gender']],
                            ['Age',                  $details['age']],
                            ['Address',              $details['address']],
                            ['Yoruba Proficiency',   $details['proficiency']],
                            ['Reads & Writes Yoruba',$details['read_write'] ? 'Yes' : 'No'],
                            ['Proposed Date',        $details['proposed_date']],
                        ];
                    @endphp

                    @foreach($rows as $row)
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;width:45%;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $row[0] }}
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $row[1] }}
                        </td>
                    </tr>
                    @endforeach

                    @if(!empty($details['availability']))
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;">
                            Availability
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;">
                            {{ is_array($details['availability']) ? implode(', ', $details['availability']) : $details['availability'] }}
                        </td>
                    </tr>
                    @endif

                </table>
            </td>
        </tr>
    </table>

    <p style="margin:0 0 28px;font-family:Arial,sans-serif;font-size:14px;color:#30373E;line-height:1.8;">
        Our team will be in touch with next steps as your proposed date approaches. We look forward to having you on the show!
    </p>

    <!-- CTA -->
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:28px;">
        <tr>
            <td style="background-color:#B19777;">
                <a href="{{ url('/') }}"
                   style="display:inline-block;padding:13px 32px;font-family:Arial,sans-serif;font-size:13px;font-weight:bold;color:#ffffff;text-decoration:none;letter-spacing:2px;text-transform:uppercase;">
                    Visit Our Website
                </a>
            </td>
        </tr>
    </table>

    <p style="margin:0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;line-height:1.6;">
        Questions? Reach us at
        <a href="mailto:admin@onidemodegameshow.com" style="color:#B19777;text-decoration:none;">admin@onidemodegameshow.com</a>
    </p>

@endsection
