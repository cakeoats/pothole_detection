<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Default Title')</title>

    <!-- Line Icons -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
    <link rel="stylesheet"  href='{{asset("css/dashboard.css")}}'>
    
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.0/dist/css/bootstrap-datepicker3.min.css">
    
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" rel="stylesheet">
    
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
</head>

<body>
<div class="wrapper">
    @include('layouts.sidebar')
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3 d-flex bg-white">
                <div class="navbar-collapse collapse">
                <h3 class="fw-bold">Dashboard Visual Pothole Reporting</h3>
                </div>
                <span class="navbar-text me-3 fw-bold">Hello, {{ session('user')['username'] }}</span> <!-- Display username -->
                <!-- <img src="{{ asset('img/logo.png') }}" alt="My Image" style="width: 50px; height: auto; float: right;"> -->
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row mb-3">
                        @include('layouts.history_filter')
                        </div>
                        <div class="row">
                        @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.0/dist/js/bootstrap-datepicker.min.js"></script>
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    
    <!-- Dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

    <!-- Custom Script -->
    <script src="{{asset('dashboard.js')}}"></script>
    @include('layouts.logging')
</body>

</html>
