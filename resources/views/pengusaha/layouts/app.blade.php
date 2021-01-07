<!DOCTYPE html>
<html>

<head>
    @include('pengusaha.component.meta')
    <title>@yield('judul')</title>
    @include('pengusaha.component.head')
</head>

<body>
    @include('pengusaha.component.sidebar')
    <!-- Main content -->
    @include('pengusaha.layouts.header')
    <!-- Page content -->
    @include('pengusaha.component.ersc')
    @yield('content')
    <!-- Footer -->
    @include('pengusaha.layouts.footer')
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('pengusaha.component.scripts')
</body>

</html>