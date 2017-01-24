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
    @stack('style-extensions')
    <!-- Scripts -->
    
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
                            @else
                                <li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
                                    <a href=""><img class="uk-border-circle uk-margin-small-right" width="32" height="32" alt="{{ Auth::user()->name }}" src="{{ Gravatar::get(Auth::user()->email) }}">{{ Auth::user()->name }} <span class="caret"></span></a>

                                    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true">
                                        <ul class="uk-nav uk-nav-navbar">
                                            @if (Auth::user()->role === 'admin')
                                                <li><a href="/profile">
                                                    <span class="uk-icon-user-secret"></span>
                                                    个人资料</a></li>
                                            @endif
                                            @if (Auth::user()->is_premium === true)
                                                <li><a href="/vip">已订阅会员</a></li>
                                            @endif
                                            <li><a href="/account">
                                                <span class="uk-icon-cogs"></span>
                                                账户设置
                                                </a>
                                            </li>
                                            <li><a href="/favorite">
                                                <span class="uk-icon-heart"></span>
                                                收藏列表</a></li>
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    <span class="uk-icon-sign-out"></span>
                                                    登出
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('series-introduction');
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
