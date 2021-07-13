@extends('layouts.appuk')
@section('title', 'Globinc - Passive income on the crypto exchange.')
@section('meta', 'Passive income✔ making money on the Internet ✔ buy bitcoin ✔ everything about the crypto exchange - Globinc, your way to success.')
@section('keywords', 'Passive income | Globinc')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-banner bg-theme-grad-s2">
        <div class="nk-banner">
            <div class="banner ">
                <div class="banner-wrap">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-6 col-lg-9">
                                <div class="banner-caption cpn tc-light text-center">
                                    <div class="section-head section-head-s2">
                                        <h2 class="title title-xl" title="Timeline" style="color: #fff;">НОВОСТИ</h2>
                                        <p>О проекте в сми, бонусы, акции, новости проекта и многое другое вы найдете в рубрике новости</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .nk-banner -->
        <div class="nk-ovm nk-ovm-repeat nk-ovm-fixed shape-i">
            <div class="ovm-line"></div>
            <div class="nk-ovm shape-b"></div>
        </div>
    </div>
    </header>


    <main class="nk-pages">
        <section class="section bg-light">
            <div class="container">
                <div class="nk-block nk-block-blog">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                @foreach($news as $new)
                                    <div class="col-sm-6">
                                        <div class="blog">
                                            <div class="blog-photo">
                                                <img src="{{asset($new->avatar)}}" alt="blog-thumb">
                                            </div>
                                            <div class="blog-text">
                                                <ul class="blog-meta">
                                                    <li><a href="#">{{$new->created_at}}</a></li>
                                                    <li><a href="#">Blockchain</a></li>
                                                </ul>
                                                <h6 class="title title-sm"><a href="{{route('show.news', $new)}}">{{ \Illuminate\Support\Str::limit($new->title, 50, $end='...') }}</a></h6>
                                            </div>
                                        </div><!-- .blog -->
                                    </div><!-- .col -->
                                @endforeach
                            </div><!-- .row -->
                            <nav class="w-100 d-flex">
                                    {{ $news->links() }}
                            </nav>
                        </div><!-- .col -->
                        <div class="col-lg-5">
                            <div class="sidebar ml-lg-4 mt-5 mt-lg-0">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                        {
                                            "colorTheme": "light",
                                            "dateRange": "12M",
                                            "showChart": true,
                                            "locale": "ru",
                                            "largeChartUrl": "",
                                            "isTransparent": true,
                                            "showSymbolLogo": false,
                                            "width": "400",
                                            "height": "660",
                                            "plotLineColorGrowing": "rgba(3, 7, 112, 1)",
                                            "plotLineColorFalling": "rgba(91, 15, 0, 1)",
                                            "gridLineColor": "rgba(240, 243, 250, 1)",
                                            "scaleFontColor": "rgba(191, 144, 0, 1)",
                                            "belowLineFillColorGrowing": "rgba(111, 168, 220, 0.12)",
                                            "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(241, 194, 50, 0.12)",
                                            "tabs": [
                                            {
                                                "title": "Индексы",
                                                "symbols": [
                                                    {
                                                        "s": "FOREXCOM:SPXUSD",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:NSXUSD",
                                                        "d": "Nasdaq 100"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:DJI",
                                                        "d": "Dow 30"
                                                    },
                                                    {
                                                        "s": "INDEX:NKY",
                                                        "d": "Nikkei 225"
                                                    },
                                                    {
                                                        "s": "INDEX:DEU30",
                                                        "d": "DAX Index"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:UKXGBP",
                                                        "d": "UK 100"
                                                    },
                                                    {
                                                        "s": "BITSTAMP:BTCUSD"
                                                    }
                                                ],
                                                "originalTitle": "Indices"
                                            }
                                        ]
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->

                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div><!-- .container -->
        </section><!-- .section -->
    </main>
@endsection
