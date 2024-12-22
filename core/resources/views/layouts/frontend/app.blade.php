<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewant.com/products/html/innovat/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 15:37:00 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('settings.site_name', 'ONIDEMODE - Yoruba Essence, Culture Reimagined.') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('settings.site_favicon', 'assets/images/logo/favicon.ico')) }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ config('settings.seo_description', 'Default description for the website.') }}">
    <meta name="keywords" content="{{ config('settings.seo_keywords', 'keyword1, keyword2, keyword3') }}">
    <meta name="author" content="{{ config('settings.seo_author', 'Your Site Name') }}">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta property="og:title" content="{{ config('settings.site_name', 'Default Site Name') }} - {{ config('settings.seo_title', 'Default SEO Title') }}">
    <meta property="og:description" content="{{ config('settings.seo_description', 'Default description for the website.') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset(config('settings.og_image', 'assets/images/logo/og-image.png')) }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ config('settings.site_name', 'Default Site Name') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('settings.site_name', 'Default Site Name') }} - {{ config('settings.seo_title', 'Default SEO Title') }}">
    <meta name="twitter:description" content="{{ config('settings.seo_description', 'Default description for the website.') }}">
    <meta name="twitter:image" content="{{ asset(config('settings.og_image', 'assets/images/logo/twitter-image.png')) }}">
    <meta name="twitter:site" content="{{ config('settings.twitter_handle', '@DefaultHandle') }}">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset(config('settings.site_favicon', 'assets/images/logo/favicon.ico')) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/apple-touch-icon.png') }}">

    <!-- Preloading Resources -->
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/js/script.js') }}" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/metismenu.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Schema.org for SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('settings.site_name', 'Default Site Name') }}",
            "url": "{{ url('/') }}",
            "logo": "{{ asset(config('settings.og_image', 'assets/images/logo/og-image.png')) }}",
            "sameAs": [
                "{{ config('settings.facebook_page', 'https://www.facebook.com/YourPage') }}",
                "{{ config('settings.twitter_handle', 'https://twitter.com/YourHandle') }}",
                "{{ config('settings.linkedin_profile', 'https://www.linkedin.com/in/YourProfile') }}"
            ]
        }
    </script>
</head>


<body class="index-four with-grid in-dark">

    @include('layouts.frontend.header')
    @yield('content')
    @include('layouts.frontend.footer')
    <!-- scripts -->
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrolltoplugin.js')}}"></script>

    <!-- gsap plugins -->
    <script src="{{asset('assets/js/vendor/gsap.js')}}"></script>
    <script src="{{asset('assets/js/vendor/metismenu.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrolltiger.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrolltoplugin.js')}}"></script>
    <!-- <script src="{{asset('assets/js/plugins/smoothscroll.js')}}"></script> -->
    <script src="{{asset('assets/js/plugins/splittext.js')}}"></script>
    <!-- gsap plugins end-->

    <script src="{{asset('assets/js/vendor/magnifying-popup.js')}}"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="{{asset('assets/js/plugins/swiper.js')}}"></script>
    <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{asset('assets/js/vendor/chroma.min.js')}}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{asset('assets/js/plugins/contact.form.js')}}"></script>

    <!-- main Js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
