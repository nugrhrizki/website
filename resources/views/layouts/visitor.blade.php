<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#00acfe">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href={{ Vite::asset('resources/images/c1logo.png') }} type="image/png" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <x-header />
    <main class="max-w-[85rem] w-full mx-auto">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
