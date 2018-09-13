<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LawyersCode Resource Site') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar-start has-shadow">
            <div class="container">
                <div class="navbar-brand">
                        <a class="navbar-item" href="{{ route('home') }}">
                            <img src="https://bulma.io/images/bulma-logo.png" width="224" height="56" alt="Bulma"/>
                        </a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                    </div>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
                    @else
                        <button id ='button' class="button dropdown navbar-item is-tab is-aligned-right">
                            Hey Waqar &nbsp;<span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-user m-r-10"></i> </span> Profile</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-bell m-r-10"></i> </span> Notifications</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-cog m-r-10"></i> </span> Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-sign-out m-r-10"></i> </span> Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>
</html>
