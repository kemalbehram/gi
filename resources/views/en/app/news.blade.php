@extends('layouts.app')
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
                                        <h2 class="title title-xl" title="News" style="color: #fff;">News</h2>
                                        <p>
                                            About the project in the media, bonuses, promotions, project news and much more you will find in the news section.</p>
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
                        <div class="col-lg-8">
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
                                                <h6 class="title title-sm"><a href="{{route('show.news', $new)}}">{{ \Illuminate\Support\Str::limit($new->title1, 50, $end='...') }}</a></h6>
                                            </div>
                                        </div><!-- .blog -->
                                    </div><!-- .col -->
                                @endforeach
                            </div><!-- .row -->
                            <nav class="w-100 d-flex">
                                    {{ $news->links() }}
                            </nav>
                        </div><!-- .col -->
                        <div class="col-lg-4">
                            <div class="sidebar ml-lg-4 mt-5 mt-lg-0">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                        {
                                            "colorTheme": "light",
                                            "dateRange": "12M",
                                            "showChart": true,
                                            "locale": "uk",
                                            "largeChartUrl": "",
                                            "isTransparent": true,
                                            "showSymbolLogo": false,
                                            "width": "400",
                                            "height": "660",
                                            "plotLineColorGrowing": "rgba(7, 55, 99, 1)",
                                            "plotLineColorFalling": "rgba(102, 0, 0, 1)",
                                            "gridLineColor": "rgba(240, 243, 250, 1)",
                                            "scaleFontColor": "rgba(191, 144, 0, 1)",
                                            "belowLineFillColorGrowing": "rgba(60, 120, 216, 0.12)",
                                            "belowLineFillColorFalling": "rgba(61, 133, 198, 0.12)",
                                            "symbolActiveColor": "rgba(127, 96, 0, 0.12)",
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
                                                    }
                                                ],
                                                "originalTitle": "Indices"
                                            },
                                            {
                                                "title": "Фьючерсы",
                                                "symbols": [
                                                    {
                                                        "s": "CME_MINI:ES1!",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "CME:6E1!",
                                                        "d": "Euro"
                                                    },
                                                    {
                                                        "s": "COMEX:GC1!",
                                                        "d": "Gold"
                                                    },
                                                    {
                                                        "s": "NYMEX:CL1!",
                                                        "d": "Crude Oil"
                                                    },
                                                    {
                                                        "s": "NYMEX:NG1!",
                                                        "d": "Natural Gas"
                                                    },
                                                    {
                                                        "s": "CBOT:ZC1!",
                                                        "d": "Corn"
                                                    }
                                                ],
                                                "originalTitle": "Commodities"
                                            },
                                            {
                                                "title": "Облигации",
                                                "symbols": [
                                                    {
                                                        "s": "CME:GE1!",
                                                        "d": "Eurodollar"
                                                    },
                                                    {
                                                        "s": "CBOT:ZB1!",
                                                        "d": "T-Bond"
                                                    },
                                                    {
                                                        "s": "CBOT:UB1!",
                                                        "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBL1!",
                                                        "d": "Euro Bund"
                                                    },
                                                    {
                                                        "s": "EUREX:FBTP1!",
                                                        "d": "Euro BTP"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBM1!",
                                                        "d": "Euro BOBL"
                                                    }
                                                ],
                                                "originalTitle": "Bonds"
                                            },
                                            {
                                                "title": "Форекс",
                                                "symbols": [
                                                    {
                                                        "s": "FX:EURUSD"
                                                    },
                                                    {
                                                        "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                        "s": "FX:USDJPY"
                                                    },
                                                    {
                                                        "s": "FX:USDCHF"
                                                    },
                                                    {
                                                        "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                        "s": "FX:USDCAD"
                                                    }
                                                ],
                                                "originalTitle": "Forex"
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
