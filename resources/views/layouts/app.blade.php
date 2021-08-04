<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'TWGroup') }} | Registro</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('') }}/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
              <img src="{{ url('') }}/img/logo.png" alt="">
            </div>

            @yield('content')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('') }}/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('') }}/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('') }}js/adminlte.min.js"></script>
</body>
</html>
