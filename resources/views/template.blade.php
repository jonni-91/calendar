<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('/css/app.css') }}">
    <title>Laravel</title>
</head>
<body>
<div>Header</div>
<div>@yield('content')</div>
<div>Footer</div>
</body>
</html>

