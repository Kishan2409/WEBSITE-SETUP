<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.files.head')
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('admin.files.navbar')

        @include('admin.files.sidebar')

        @yield('main')

        @include('admin.files.footer')

    </div>
    <!-- ./wrapper -->
    @include('admin.files.script')
    @yield('script')
</body>

</html>
