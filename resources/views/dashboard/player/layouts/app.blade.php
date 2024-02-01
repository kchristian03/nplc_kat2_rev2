
@include('dashboard.player.layouts.header')
    <title>@yield('title')</title>
        @yield('script')
        @livewireStyles
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
    @yield('content')
@include('dashboard.player.layouts.footer')
