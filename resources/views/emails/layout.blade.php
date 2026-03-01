<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'ONÍDÈMỌDÈ')</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
        body { margin: 0 !important; padding: 0 !important; background-color: #f0ede8; }
        a { color: #B19777; }
    </style>
</head>
<body style="margin:0;padding:0;background-color:#f0ede8;font-family:Georgia,serif;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f0ede8;">
        <tr>
            <td align="center" style="padding:30px 15px;">

                <!-- Email wrapper -->
                <table role="presentation" width="620" cellpadding="0" cellspacing="0" border="0" style="max-width:620px;width:100%;">

                    <!-- Header -->
                    <tr>
                        <td style="background-color:#1F1F25;padding:0;border-top:4px solid #B19777;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" style="padding:30px 40px 25px;">
                                        <img src="{{ url('assets/images/logo/ONIDEMODE.webp') }}"
                                             alt="ONÍDÈMỌDÈ"
                                             width="180"
                                             style="display:block;max-width:180px;height:auto;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#B19777;height:2px;font-size:2px;line-height:2px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="background-color:#ffffff;padding:40px;">
                            @yield('content')
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#1F1F25;padding:25px 40px;border-bottom:4px solid #B19777;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center">
                                        <p style="margin:0 0 8px;font-family:Georgia,serif;font-size:13px;color:#B19777;letter-spacing:1px;text-transform:uppercase;">ONÍDÈMỌDÈ Game Show</p>
                                        <p style="margin:0 0 8px;font-family:Arial,sans-serif;font-size:12px;color:#7D7D7D;">
                                            <a href="mailto:admin@onidemodegameshow.com" style="color:#7D7D7D;text-decoration:none;">admin@onidemodegameshow.com</a>
                                            &nbsp;&bull;&nbsp;
                                            <a href="{{ url('/') }}" style="color:#7D7D7D;text-decoration:none;">onidemodegameshow.com</a>
                                        </p>
                                        <p style="margin:0;font-family:Arial,sans-serif;font-size:11px;color:#555;">&copy; {{ date('Y') }} ONÍDÈMỌDÈ. All Rights Reserved.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
                <!-- /Email wrapper -->

            </td>
        </tr>
    </table>

</body>
</html>
