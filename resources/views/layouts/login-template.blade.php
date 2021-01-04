<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://mannatthemes.com/metrica/dark/assets/images/favicon.ico">
    <!-- App css -->
    @include('front-home.includes.style-home')
    @yield('styles')
</head>

<body class="account-body accountbg">
    @yield('content')
    <!-- Scripts  -->
    @include('front-home.includes.script-home')
</body>

@yield('javascripts')
</html>