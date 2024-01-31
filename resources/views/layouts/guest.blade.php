<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NPLC -  Logic Games') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

{{--    <script src="https://cdn.tailwindcss.com"></script>--}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        .blockselect {
            -webkit-user-select: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none
        }

        body {
            background: url(https://11th-nplc.tech/img/nplcbg.png) center top no-repeat;
            background-size: cover;
            overflow-x: hidden
        }
    </style>

</head>
<body>
<div class="relative h-screen w-screen overflow-hidden py-8">
    <img src="https://11th-nplc.tech/img/bottommoon.png" alt="moon bottom"
         class="absolute w-full h-full bottom-0 left-0 right-0">
    <img src="https://11th-nplc.tech/img/sparkle2.png" alt="sparkle"
         class="absolute bottom-10 right-0 h-[900px] w-[900px] opacity-25 animate-pulse">
    <img src="https://11th-nplc.tech/img/sparkle2.png" alt="sparkle"
         class="absolute top-10 left-10 h-[500px] animate-pulse blockselect">
    <img src="https://11th-nplc.tech/img/sparkle2.png" alt="sparkle"
         class="absolute top-20 right-10 h-[500px] animate-pulse blockselect">
    <img src="https://11th-nplc.tech/img/sparkle2.png" alt="sparkle"
         class="absolute bottom-0 left-10 h-[800px] w-[800px] opacity-25 animate-pulse">
    <div class="relative flex h-full w-full justify-center items-center font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>
</div>

@livewireScripts
</body>
</html>
