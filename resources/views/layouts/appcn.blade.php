<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/лого.png') }}">
    <meta name="description" content="@yield('meta')">
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-azalea-copy.css') }}" id="changeTheme">
    {{--    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/cal.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KWM6MK8');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="nk-body body-wider bg-theme mode-onepage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWM6MK8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Messenger Плагин чата Code -->
<div id="fb-root"></div>

<!-- Your Плагин чата code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "100451318993145");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="nk-wrap">
    <header class="nk-header page-header is-transparent is-sticky is-dark" id="header">
        <div class="header-main">
            <div class="header-container container container-xxl">
                <div class="header-wrap">
                    <div class="header-logo logo">
                        <a href="{{route('home')}}" class="logo-link">
                            <h3 style=""><img style="" src="{{asset('../images/len.png')}}"><span style="margin-left: 10px; color: white; font-weight: 900;">Globinc</span><span  style="color: white; font-weight: 300;"></span></h3>
                        </a>
                    </div>
                    @if (App\Http\Middleware\LocaleMiddleware::getLocale() === null )
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'en'])}}">EN</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'cn'])}}">CN</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ua'])}}">UA</a></li>
                            </ul>
                        </div>
                    @elseif(App\Http\Middleware\LocaleMiddleware::getLocale() === 'ru' )
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'cn'])}}">CN</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'en'])}}">EN</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ua'])}}">UA</a></li>
                            </ul>
                        </div>
                    @elseif(App\Http\Middleware\LocaleMiddleware::getLocale() === 'cn' )
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'cn'])}}">CN</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'en'])}}">En</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ua'])}}">UA</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'ua'])}}">UA</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'cn'])}}">CN</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'en'])}}">EN</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a></li>
                            </ul>
                        </div>
                    @endif
                    <div class="header-nav-toggle">
                        <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                            <div class="toggle-line">
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="header-navbar">
                        <nav class="header-menu" id="header-menu">
                            <ul class="menu">
                                <li class="menu-item ">
                                    <a class="" href="{{route('home')}}">主要的</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('page','about')}}">关于我们</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('page','proposal')}}">提议</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('show.news.index')}}">消息</a>
                                </li>
                            </ul>
                            <ul class="menu-btns">
                                <li><a href="https://my.globinc.com/auth/login" class="btn btn-md btn-thin btn-outline btn-auto btn-primary btn-round no-change"><span>登录</span></a></li>
                            </ul>
                            <ul class="menu-btns" >
                                <li><a href="https://my.globinc.com/auth/register" class="btn btn-md btn-thin btn-outline btn-auto btn-primary btn-round no-change"  style="background-color: #dabd75!important; "><span >注册</span></a></li>
                            </ul>
                        </nav>
                    </div><!-- .header-navbar @e -->
                </div>
            </div>
        </div><!-- .header-main @e -->
@include('flash::message')
@yield('content')
</body>
<footer class="nk-footer bg-theme-grad has-ovm">
    <section class="section section-footer tc-light bg-transparent">

        <div class="container">
            <!-- Block @s -->
            <div class="nk-block block-footer">
                <div class="row justify-content-between">
                    <div class="col-sm-5 mb-sm-0 col-6">
                        <div class="wgs wgs-menu">
                            <h6 class="wgs-title"  style="color: #dabd75;">公司</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links">
                                    <li><a href="{{route('page','proposal')}}">合作</a></li>
                                    <li><a href="{{route('show.news.index')}}">消息</a></li>
                                    <li><a href="{{route('page','about')}}">慈善机构</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-5 col-sm-4 mb-sm-0 col-6">
                        <div class="wgs wgs-menu">
                            <h6 class="wgs-title"  style="color: #dabd75;">文档</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links">
                                    <li><a href="{{route('page','pol')}}">隐私声明</a></li>
                                    <li><a href="#">公开发售协议</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-sm-2 mb-sm-0 col-6">
                        <div class="wgs wgs-menu">
                            <h6 class="wgs-title"  style="color: #dabd75;">社交网络</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links" style="">
                                    <a href="https://www.instagram.com/globinclp" style="padding: 10px;"><em class="fab fa-instagram"></em></a>
                                    <a href="https://www.facebook.com/globinclp" style="padding: 10px;"><em class="fab fa-facebook-f"></em></a>
                                    <a href="https://www.youtube.com/channel/UCQR35ptklYlc8xXa5W6r1Ng/videos" style="padding: 10px;"><em class="fab fa-youtube"></em></a>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .block @e -->
        </div>
    </section>
    <div class="section section-m footer-bottom">
        <div class="container">
            <div class="row justify-content-md-between align-items-center">
                <div class="col-lg-6 col-md-3 col-sm-4">
                    <div class="header-logo logo">
                        <a href="{{route('home')}}" class="logo-link">
                            <h3 style=""><img style="" src="{{ asset('../images/len.png')}}"><span style="margin-left: 10px; color: white; font-weight: 900;">Globinc</span><span  style="color: white; font-weight: 300;"></span></h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="copyright-text">
                        <ul class="d-flex justify-content-between align-items-center flex-wrap flex-md-nowrap">
                            <li><p>注册号 - №LP021936，法定地址 - 7 Bell Yard, London United Kingdom, WC2A 2JR。版权所有 © 2021</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-ovm shape-b"></div>
</footer>
<wrapper>
    <div class="dws">
        <a href="{{route('show.news.index')}}">
            <div class="pulse">
                <div class="bloc"></div>
                <div class="phone"><i class="fa fa-clone " aria-hidden="true"></i></div>
                <div class="text">last news</div>
            </div>
        </a>
    </div>
</wrapper>
<div class="nk-ovm nk-ovm-repeat nk-ovm-fixed shape-i">
    <div class="ovm-line"></div>
</div>
<div class="preloader preloader-alt no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="{{asset('../images/bitcoin2.png')}}"></span></div>
<script src="{{ asset('js/cal.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/jquery.bundle.js?ver=1930') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
@yield('script')
<script src="{{ asset('js/scripts.js?ver=1930') }}"></script>
<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/toastr.examples.js?ver=1930')}}"></script>
</html>

