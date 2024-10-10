<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3 bg-white shadow-sm">
                <div class="d-flex align-items-center w-100">
                    <h3 class="fw-bold mb-0">Dashboard Visual Pothole Reporting</h3>
                    <div class="ms-auto">
                        <span class="navbar-text me-3 fw-bold">Hello, {{ session('user')['username'] }}</span>
                        <!-- <img src="{{ asset('img/logo.png') }}" alt="My Image" style="width: 50px; height: auto;"> -->
                    </div>
                </div>
            </nav>
            <main class="content p-4">
                <div class="container-fluid">
                    <div class="row mb-3">
                        @include('layouts.dashboard_filter')
                    </div>
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @include('layouts.logging')
</body>
</html>
