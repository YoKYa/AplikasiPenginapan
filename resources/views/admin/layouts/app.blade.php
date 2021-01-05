<!DOCTYPE html>
<html>

<head>
    @include('admin.component.meta')
    <title>@yield('judul')</title>
    @include('admin.component.head')
</head>

<body>
    @include('admin.component.sidebar')
    <!-- Main content -->
    @include('admin.layouts.header')
    <!-- Page content -->
    @yield('content')
    <!-- Footer -->
    @include('admin.layouts.footer')
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('admin.component.scripts')
</body>

</html>