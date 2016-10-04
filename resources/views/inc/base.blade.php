<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flat UI Free 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('flat/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('flat/css/flat-ui.min.css') }}"  rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('flat/img/favicon.ico') }}">
    @yield('head')
</head>
<body>
@yield('header')
<div class="container">
    @yield('content')
</div>
@yield('bottom')

<script src="{{ asset('flat/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('flat/js/vendor/video.js') }}"></script>
<script src="{{ asset('flat/js/flat-ui.min.js') }}"></script>
<script src="{{ asset('js/vue.min.js') }}"></script>
@yield('boot')
</body>
</html>