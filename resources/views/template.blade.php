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
<div class="uk-container-expand wrapper" id="app">
    @yield('config')
    <div class="uk-child-width-1-1 uk-grid-collapse uk-text-center" uk-grid>
        <div class="uk-card-default uk-card-body">
            @yield('header')
        </div>
        @if (session('status'))
            <div class="uk-card-default uk-card-body">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        <div class="uk-card-default uk-card-body">
            @yield('content')
        </div>
        <div class="uk-card-default uk-card-body">
            @yield('footer')
        </div>
    </div>
</div>
<script src="@yield('script')"></script>
<!-- JS FILES -->
{{--<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>--}}
</body>
</html>

