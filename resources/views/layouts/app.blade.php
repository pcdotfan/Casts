<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Scripts -->
    @stack('style-extensions')
</head>

<body>
    <div id="app">
        <header class="tm-navbar tm-navbar-overlay" data-uk-sticky="{'media':767,'showup':true,'animation':'uk-animation-slide-top'}" style="margin: 0px;">
            <nav class="uk-navbar">
                <a class="uk-navbar-brand" href="/">
                    <img class="tm-logo" src="/storage/pagekit-logo.svg" alt="">
                    <img class="tm-logo-contrast" src="/storage/pagekit-logo-contrast.svg" alt="">
                </a>
                <div class="uk-position-top uk-flex uk-flex-center uk-hidden-small">
                    <ul class="uk-navbar-nav">
                        <li class="">
                            <a href="/">首页</a>
                        </li>
                        <li class="">
                            <a href="/series">视频</a>
                        </li>
                        <li class="">
                            <a href="/forums">问答</a>
                        </li>
                        <li class="">
                            <a href="/about">关于</a>
                        </li>
                    </ul>
                    <div class="uk-navbar-content uk-flex uk-flex-middle tm-visible-xlarge">
                        <ul class="tm-iconnav">
                            <li>
                                <a class="tm-icon-github" href="https://github.com/pagekit"></a>
                            </li>
                            <li>
                                <a class="tm-icon-twitter" href="https://twitter.com/pagekit"></a>
                            </li>
                            <li>
                                <a class="tm-icon-gitter" href="https://gitter.im/pagekit/pagekit"></a>
                            </li>
                            <li>
                                <a class="tm-icon-google" href="https://plus.google.com/communities/104125443335488004107"></a>
                            </li>
                            <li>
                                <a class="tm-icon-youtube" href="https://www.youtube.com/channel/UC2tvrbIClcDXv9AH4kBmwog"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-navbar-content uk-navbar-flip  uk-hidden-small">
                    <div class="tm-contrast">
                        <ul class="uk-navbar-nav github-login socialite-login">
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="tm-main uk-block uk-block-default uk-container uk-container-center">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/uikit/uikit.min.js"></script>
    <script src="/assets/js/uikit/components/sticky.min.js"></script>
    @stack('script-extensions')
</body>

</html>
