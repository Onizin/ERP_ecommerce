<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'ERP Ecommerce') }}</title>
    <link rel="stylesheet" href="{{ asset('Adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Adminlte3/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert/package/dist/sweetalert2.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-light bg-white shadow-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link">ERP Ecommerce</span>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('dashboard') }}" class="brand-link text-decoration-none">
            <span class="brand-text font-weight-light ml-3">ERP Ecommerce</span>
        </a>

        <div class="sidebar">
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled">
                            <i class="nav-icon fas fa-database"></i>
                            <p>ERP Core</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>ERP Sales</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <section class="content pt-4">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </section>
    </div>
</div>

<script src="{{ asset('Adminlte3/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Adminlte3/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('sweetalert/package/dist/sweetalert2.min.js') }}"></script>
<script>
    document.addEventListener('livewire:init', () => {
        window.addEventListener('swal', (event) => {
            const detail = event.detail || {};

            Swal.fire({
                title: detail.title || 'Informasi',
                text: detail.text || '',
                icon: detail.icon || 'info',
                confirmButtonText: detail.confirmButtonText || 'OK',
            });
        });
    });
</script>
@livewireScripts
@stack('scripts')
</body>
</html>