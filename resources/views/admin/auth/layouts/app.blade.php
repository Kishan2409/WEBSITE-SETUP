<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.auth.files.head')
</head>

<body class="hold-transition login-page">
    @yield('main')
    @include('admin.auth.files.script')
    @yield('script')
</body>

</html>
