<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js'])
        @vite('resources/css/app.css')

        <title>Co-working Space Booking</title>

    </head>
    <body class="flex justify-center items-center w-full h-screen">
        @yield('content')
    </body>
</html>