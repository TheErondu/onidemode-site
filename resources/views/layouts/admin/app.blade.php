<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('settings.site_name', 'ONIDEMODE - Yoruba Essence, Culture Reimagined.') }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/iconly/bold.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/fontawesome/all.min.css') }}">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/favicon.ico')}}">
</head>

<body>
    <div id="app">
        @include('layouts.admin.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')
            @yield('javascript')
            @include('layouts.admin.footer')
        </div>
    </div>
    <script src="{{ asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/admin/js/mazer.js') }}"></script>

</body>

</html>
