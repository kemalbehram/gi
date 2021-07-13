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
</head>

<body class="nk-body body-wider bg-theme mode-onepage">

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
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'en'])}}">En</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'uk'])}}">Uk</a></li>
                            </ul>
                        </div>
                    @elseif(App\Http\Middleware\LocaleMiddleware::getLocale() === 'ru' )
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'en'])}}">En</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'uk'])}}">Uk</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="language-switcher language-switcher-s3 toggle-wrap">
                            <a  class=" toggle-tigger" href="{{route('setlocale', ['lang' => 'uk'])}}">Uk</a>
                            <ul class="toggle-class toggle-drop text-center drop-list drop-list-xs">
                                <li><a href="{{route('setlocale', ['lang' => 'en'])}}">En</a></li>
                                <li><a href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a></li>
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
                                    <a class="" href="{{route('home')}}">HOME</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('page','about')}}">ABOUT</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('page','proposal')}}">PROPOSAL</a>
                                </li>
                                <li class="menu-item ">
                                    <a class="" href="{{route('show.news.index')}}">NEWS</a>
                                </li>
                            </ul>
                            <ul class="menu-btns">
                                <li><a href="https://my.globinc.com/auth/login" class="btn btn-md btn-thin btn-outline btn-auto btn-primary btn-round no-change"><span>Login</span></a></li>
                            </ul>
                            <ul class="menu-btns" >
                                <li><a href="https://my.globinc.com/auth/register" class="btn btn-md btn-thin btn-outline btn-auto btn-primary btn-round no-change"  style="background-color: #dabd75!important; "><span >Registration</span></a></li>
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
                                <h6 class="wgs-title"  style="color: #dabd75;">COMPANY</h6>
                                <div class="wgs-body">
                                    <ul class="wgs-links">
                                        <li><a href="{{route('page','proposal')}}">Сooperation</a></li>
                                        <li><a href="{{route('show.news.index')}}">News</a></li>
                                        <li><a href="{{route('page','about')}}">Charity</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-5 col-sm-4 mb-sm-0 col-6">
                            <div class="wgs wgs-menu">
                                <h6 class="wgs-title"  style="color: #dabd75;">Document</h6>
                                <div class="wgs-body">
                                    <ul class="wgs-links">
                                        <li><a href="{{route('page','pol')}}">Privacy Statement</a></li>
                                        <li><a href="#">Public offer agreements</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-2 mb-sm-0 col-6">
                            <div class="wgs wgs-menu">
                                <h6 class="wgs-title"  style="color: #dabd75;">Social networks</h6>
                                <div class="wgs-body">
                                    <ul class="wgs-links" style="">
                                        <a href="#" style="padding: 10px;"><em class="fab fa-instagram"></em></a>
                                        <a href="#" style="padding: 10px;"><em class="fab fa-facebook-f"></em></a>
                                        <a href="https://www.youtube.com/channel/UC0nJBiWprh27xrPh09Su_JA" style="padding: 10px;"><em class="fab fa-youtube"></em></a>
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
                                <li><a href="#">Personal Area</a></li>

                                <li><p>Globinc. All rights reserved © 2020</p></li>
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
    <script src="{{ asset('js/scripts.js?ver=1930') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/toastr.examples.js?ver=1930')}}"></script>
</html>

