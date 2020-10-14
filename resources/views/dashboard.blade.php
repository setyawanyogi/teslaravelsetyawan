<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Sistem Informasi Perpustakaan</title>
        <link href="{{ asset('assets/dist/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/dist/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
        <script src="{{ asset('assets/dist/js/all.min.js') }}"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('sweetalert::alert')

        @include('layouts.admin.navbar')
        <div id="layoutSidenav">
            @include('layouts.admin.sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('layouts.admin.footer')
            </div>
        </div>
        <script src="{{ asset('assets/dist/js/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/dist/js/scripts.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>
