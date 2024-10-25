<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('cdn','')
    <title>@yield('page-tile','')</title>
</head>

<body>
    @include('partials.header')

    @yield('main-content','')

    @include('partials.footer')

    @vite('resources/js/app.js')
</body>

</html>