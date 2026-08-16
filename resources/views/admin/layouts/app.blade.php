<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - {{ config('app.name', 'I Seen Computer') }}</title>

    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    @stack('styles')
</head>
<body class="admin-body">
    <div class="admin-layout">
        <!-- Sidebar -->
        @include('admin.components.sidebar')

        <!-- Main Content Area -->
        <div class="admin-main">
            <!-- Navbar -->
            @include('admin.components.navbar')

            <!-- Page Content -->
            <div class="admin-content-wrapper">
                <div class="admin-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
