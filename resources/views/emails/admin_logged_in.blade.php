@extends('emails.layout')

@section('title', 'Admin Login Alert – ONÍDÈMỌDÈ')

@section('content')

    <h1 style="margin:0 0 6px;font-family:Georgia,serif;font-size:26px;color:#1F1F25;font-weight:normal;">
        Login Detected
    </h1>
    <p style="margin:0 0 25px;font-family:Georgia,serif;font-size:13px;color:#B19777;letter-spacing:2px;text-transform:uppercase;">
        Admin Security Alert
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
        <tr><td style="background-color:#B19777;height:1px;font-size:1px;line-height:1px;">&nbsp;</td></tr>
    </table>

    <p style="margin:0 0 20px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        Hi {{ $details['user']->name }},
    </p>

    <p style="margin:0 0 24px;font-family:Arial,sans-serif;font-size:15px;color:#30373E;line-height:1.8;">
        A successful login was recorded on your admin account. If this was you, no action is needed. If you did not initiate this login, please secure your account immediately.
    </p>

    <!-- Alert card -->
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
           style="background-color:#f8f6f3;border-left:4px solid #B19777;margin-bottom:28px;">
        <tr>
            <td style="padding:22px 25px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">

                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;width:40%;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Account Name
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $details['user']->name }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            Email
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;border-bottom:1px solid #ede9e3;">
                            {{ $details['user']->email }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;vertical-align:top;">
                            Login Time
                        </td>
                        <td style="padding:7px 0;font-family:Arial,sans-serif;font-size:13px;color:#30373E;font-weight:bold;vertical-align:top;">
                            {{ $details['login_time'] }}
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
                <a href="{{ route('admin.back-office') }}"
                   style="display:inline-block;padding:13px 32px;font-family:Arial,sans-serif;font-size:13px;font-weight:bold;color:#ffffff;text-decoration:none;letter-spacing:2px;text-transform:uppercase;">
                    Go to Back Office
                </a>
            </td>
        </tr>
    </table>

    <p style="margin:0;font-family:Arial,sans-serif;font-size:13px;color:#7D7D7D;line-height:1.6;">
        If you did not log in, contact us immediately at
        <a href="mailto:admin@onidemodegameshow.com" style="color:#B19777;text-decoration:none;">admin@onidemodegameshow.com</a>
    </p>

@endsection
