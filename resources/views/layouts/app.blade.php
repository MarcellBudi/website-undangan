<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" /> -->
</head>
<body>
    <div id="app">
        <header class="flex justify-around items-center shadow-xl w-full h-12 ">
            <nav class="">
                <ul class="flex justify-center items-center space-x-6">
                @guest
                    <li class=""><a href="">Home</a></li>
                    <li class=""><a href="">About</a></li>
                    @if (Route::has('login'))
                        <li class=""><a href="">Login</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li class=""><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                    @else
                    <li class="align-right"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endguest
                </ul>
                
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script> -->
</body>
</html>
