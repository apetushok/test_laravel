<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test App - @yield('title')</title>

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-sky-50">
    <div class="container mx-auto font-sans text-base text-black bg-white">
        @include('components.nav')
        @yield('content')
    </div>
</body>
</html>
