<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TWGroup') }} | {{ isset($module) ? $module : '' }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('') }}/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            </ul>
            <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


        <li class="nav-item">
            <a class="nav-link"  href="{{ url('/logout') }}" role="button">
            Cerrar Sesión
            </a>
        </li>
        </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
            <img src="{{ url('') }}/img/logo.png" alt="TWGroup Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">TWGroup</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                </div>
                <div class="info">
                <a href="/" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="desafio1" class="nav-link {{ Request::is('desafio1') || Request::is('desafio1/*') ? 'active' : '' }}">
                            <i class="far fa-file nav-icon"></i>
                            <p>Desafío 1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="desafio4" class="nav-link {{ Request::is('desafio4')  ? 'active' : '' }}">
                            <i class="far fa-file nav-icon"></i>
                            <p>Desafío 4</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ Request::is('desafio5/*') ? 'active' : '' }}">
                          <i class="nav-icon far fa-file {{ Request::is('desafio4')  ? 'active' : '' }}"></i>
                          <p>Desafío 5</p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="desafio5/tasks" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>Tareas</p>
                                </a>
                            </li>
                        </ul>
                      </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($modulo) ? $modulo : '' }}</h1>
                  </div><!-- /.col -->

                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('content')
        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ url('') }}/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('') }}/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('') }}/js/adminlte.min.js"></script>
    @yield('scripts')
</body>
</html>
