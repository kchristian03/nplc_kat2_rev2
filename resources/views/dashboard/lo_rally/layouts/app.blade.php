
@include('dashboard.lo_rally.layouts.header')
    <title>@yield('title')</title>
        @yield('script')
        @livewireStyles
        @vite('resources/js/app.js')
</head>
<body>
    @yield('content')
@include('dashboard.lo_rally.layouts.footer')
