<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> SimoosiAHP || </title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
        
        @stack('css')
        @livewireStyles
        @stack('style')
    </head>

    <body class="app">
        <x-material.nav-mobile />
        <div class="flex">
            <x-material.sidebar />
            {{-- {{dd($title)}} --}}
            <div class="content">
                <x-material.topbar :title="$title" />
                @yield('content')
            </div>
        </div>


        <script src="{{ asset('dist/js/app.js') }}"></script>
        
        @stack('js')
        @livewireScripts
        @stack('script')
    </body>

</html>
