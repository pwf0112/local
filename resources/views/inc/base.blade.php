<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>收银机</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('flat/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('flat/css/flat-ui.min.css') }}"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('layer/skin/layer.css') }}">
    <link rel="shortcut icon" href="{{ asset('flat/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <style>
        ::-webkit-scrollbar {
            width:0;
        }
    </style>
    @yield('head')
</head>
<body>
@yield('header')
<div class="container" style="margin-top: 80px; margin-bottom: 40px;">
    @yield('content')
</div>
@yield('bottom')

<script src="{{ asset('flat/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('flat/js/vendor/video.js') }}"></script>
<script src="{{ asset('flat/js/flat-ui.min.js') }}"></script>
<script src="{{ asset('layer/layer.js') }}"></script>
<script src="{{ asset('js/vue.min.js') }}"></script>
@yield('boot')

<footer style="height: 35px; line-height: 35px; text-align: center; position: fixed; bottom: 0; width: 100%;">
    &copy; 忻州东大
</footer>

</body>
</html>