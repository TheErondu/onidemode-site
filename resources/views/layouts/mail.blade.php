<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Reset styles for email clients */
        body {
            margin: 0;
            padding: 0;
            background-color: #f6f9fc;
            font-family: 'Arial', sans-serif;
            -webkit-font-smoothing: antialiased;
            line-height: 1.6;
        }

        /* Container styles */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Header styles */
        .header {
            text-align: center;
            padding: 25px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .logo {
            max-height: 50px;
            width: auto;
        }

        /* Content styles */
        .content {
            padding: 30px 20px;
            color: #4a5568;
        }

        .content h1 {
            color: #2d3748;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .content p {
            margin-bottom: 15px;
        }

        /* Button styles */
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4f46e5;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin: 20px 0;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            padding: 20px;
            color: #718096;
            font-size: 12px;
            border-top: 1px solid #e9ecef;
        }

        .social-links {
            margin: 15px 0;
        }

        .social-link {
            display: inline-block;
            margin: 0 10px;
            color: #718096;
            text-decoration: none;
        }

        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                padding: 10px;
            }

            .content {
                padding: 20px 15px;
            }

            .button {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <!-- Replace with your logo -->
            <img src="{{ asset('assets/images/logo/ONIDEMODE.webp') }}" alt="Your Logo" class="logo">
        </div>

        <div class="content">
            @yield('content')
        </div>

        <div class="footer">
            <div class="social-links">
                <a href="{{ config('settings.facebook_page') }}" class="social-link">Facebook</a>
                <a href="{{ config('settings.twitter_handle') }}" class="social-link">X</a>
                <a href="{{ config('settings.linkedin_profile') }}" class="social-link">LinkedIn</a>
            </div>
            <p>© {{ date('Y') }} {{ config('app.name', 'ONIDEMODE') }}. All rights reserved.</p>
            <p>{{ config('settings.site_contact_address') }}</p>
            <p>
                If you have any questions, please contact us at
                <a href="mailto:{{ config('settings.site_contact_email') }}">{{ config('settings.site_contact_email') }}</a>
            </p>
        </div>
    </div>
</body>
</html>
