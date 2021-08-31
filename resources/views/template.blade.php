<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS FILES -->
{{--        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">--}}

    <link rel="stylesheet"  href="@yield('stylesheet')">
    <link rel="icon" href="/favicon.ico">
    <title>@yield('head_title')</title>
</head>
<body>
<div class="wrapper">
    <div>@yield('header')</div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div>@yield('content')</div>
    <div>@yield('footer')</div>
</div>
<script src="@yield('script')"></script>
<!-- JS FILES -->
{{--<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>--}}
</body>
</html>

