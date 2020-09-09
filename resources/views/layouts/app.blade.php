<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ $meta_title??'' }}">
    <meta name="description" content="{{ $meta_description??'' }}">
    @if(isset($noindex) && $noindex)
    <meta name="robots" content="noindex">
    @endif
    @if(isset($settings))
    @foreach($settings as $setting)
        {!! $setting->value !!}
    @endforeach
    @endif
    <title>FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" style="max-height: 100px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ __('Main') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">{{ __('Contact') }}</a>
                    </li>
                    @guest


                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin-top: 126px;">
        @yield('content')
    </main>
</div>

<footer>
    <div class="container-fluid py-5">
        <div class="col-sm-8">
            ©2013-2016 BeMo Academic Consulting Inc. All rights reserved. <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank"><span style="text-decoration:underline;">Disclaimer &amp; Privacy Policy</span></a> <a href="mailto:info@bemoacademicconsulting.com" id="rw_email_contact"><span style="text-decoration:underline;">Contact Us</span></a>
        </div>
    </div>
</footer>
</body>
</html>
