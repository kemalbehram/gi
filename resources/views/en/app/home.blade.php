@extends('layouts.app')
@section('title', 'Global incom - Passive income on the crypto exchange.')
@section('meta', 'Passive income✔ making money on the Internet ✔ buy bitcoin ✔ everything about the crypto exchange - Global incom, your way to success.')
@section('keywords', 'Passive income | Global incom')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="banner banner-fs has-gfx tc-light">
        <div class="nk-block nk-block-sm nk-block-header my-auto">
            <div class="container container-xxl pt-5">
                <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-30px">
                    <div class="col-lg-4 order-lg-last">
                        <div class="banner-gfx banner-gfx-auto">
                            <img src="{{asset('../images/bitcoin2.png')}}" alt="header" style="border-radius: 50%; box-shadow: 14px 14px 69px -10px rgb(109 219 187);">
                        </div>
                    </div><!-- .col -->
                    <div class="col-xl-8 col-lg-6 col-sm-10 text-center text-lg-left">
                        <div class="banner-caption">
                            <div class="section-head section-head-s2" style="padding-bottom: 10px;">
                                <h1 class="title title-xl title-glob ns" title="" style=""><span style="color: white; font-weight: 900;">Global</span><span  style="color: white; font-weight: 300;"> incom</span></h1>
                                <h3 class="title title-xl title-glob" title="TO THE FUTURE" style="padding-bottom: 10px;">a way to success!</h3>
                            </div>
                            <p class="lead" style="font-size: 1.3rem; color: #dabd75;">Earn on the difference in the value of crypto currencies in the world market using the company's technological developments <span style="color: white; font-weight: 900;">Global</span><span  style="color: white; "> incom</span> in area AI</p>
                            <div class="cpn-action" >
                                <a class="btn btn-primary btn-round " href="#" style="font-size:15px; margin-bottom: 10px;">REGISTER</a>
                            </div>
                            <h3 class="title title-xl title-glob" title="В БУДУЩЕЕ" style=" ">Profit per month from<span  style="font-weight: 900; color: #dabd75; font-size: 59px; ">  30%</span></h3>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="status-countdown float-sm-right">
                        <h6 class="title title-xxs tc-default status-title ttu" style="text-align: center !important;">Starting the project wery soon</h6>
                        <div class="countdown justify-content-center justify-content-sm-start countdown-s3 countdown-s3-alt" data-date="2021/07/29" data-day-text="Days" data-Hours-text="Hours" data-min-text="Minutes" data-sec-text="Seconds"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block nk-block-status">
            <div class="container container-xxl">
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "NASDAQ 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                        ],
                            "showSymbolLogo": true,
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "ru"
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-ovm mask-e mask-contain-bottom shape-z"></div>
    </header>
    <main class="nk-pages tc-light">
        <section class="section" id="mvp">

            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="Global Package">
                                TARIFF PACKAGES</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">Invest with us. <span style="color: white; font-weight: 900;">Global</span><span  style="color: white; "> incom</span> this is your chance for success and financial freedom</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s1.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL START</div>
                                    <div class="token-stage-date">
                                        <h6>Minimum sum <span  class="token-stage-bonus">$100</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Maximum sum <span  class="token-stage-bonus">$999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Number of purchases <span  class="token-stage-bonus">2</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Profit per day <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Sum to withdraw <span  class="token-stage-bonus">70%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Autoinvest <span  class="token-stage-bonus">30%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Refund of the deposit at the end of the term<span  class="token-stage-bonus"> no</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Beginning of work <span  class="token-stage-bonus">18 days</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="#" class="btn btn-round btn-primary ">INVEST</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s3.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL BUSINESS</div>
                                    <div class="token-stage-date">
                                        <h6>Minimum sum <span  class="token-stage-bonus">$1000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Maximum sum <span  class="token-stage-bonus">$4999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Number of purchases <span  class="token-stage-bonus">unlimited</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Profit per day <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Sum to withdraw <span  class="token-stage-bonus">80%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Autoinvest <span  class="token-stage-bonus">20%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Refund of the deposit at the end of the term <span  class="token-stage-bonus"> no</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Beginning of work <span  class="token-stage-bonus">12 days</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="#" class="btn btn-round btn-primary ">INVEST</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s2.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL VIP</div>
                                    <div class="token-stage-date">
                                        <h6>Minimum sum <span  class="token-stage-bonus">$5000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Maximum sum <span  class="token-stage-bonus">unlimited</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Number of purchases <span  class="token-stage-bonus">unlimited</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Profit per day <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Sum to withdraw <span  class="token-stage-bonus">90%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Autoinvest <span  class="token-stage-bonus">10%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Refund of the deposit at the end of the term <span  class="token-stage-bonus"> no</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Beginning of work <span  class="token-stage-bonus">8 days</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="#" class="btn btn-round btn-primary ">INVEST</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="ecosystems" style="margin-top: 30px;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="Result">CALCULATOR </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters jc-c">
                <div class="col-12 col-sm-10 col-lg-6 mt-10 mt-lg-0">
                        <div class="mt-profit-calc-sec__second mnh-100">
                            <div class="mt-profit-calc-sec__second-content">
                                <div class="mt-apc">
                                    <h3 class="mt-apc__title">Affiliate Program Conditions</h3>
                                    <div class="mt-apc__list">
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Tariff Packages
                                            </div>
                                            <div class="mt-apc__li-v" data-profit-calc="direct_bonus" id="packages">Global Start</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Beginning Of Work</div>
                                            <div class="mt-apc__li-v" data-profit-calc="binary_bonus"><span  id="beginningOfWork">18</span> days</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Sum To Withdraw</div>
                                            <div class="mt-apc__li-v" id="sumToWithdraw">70%</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Minimum Sum</div>
                                            <div class="mt-apc__li-v" id="minimumSum">$100</div>
                                        </div>
                                        <br>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k" style="font-weight: bold; font-size: 20px!important;">
                                                Total result in 365 days </div>
                                            <div class="mt-apc__li-v" style="font-weight: bold; font-size: 20px!important; color: #dabd75 !important">$<span id="sum4" style="font-weight: bold; font-size: 16px!important; color: #dabd75 !important">1</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 col-sm-10 col-lg-6">
                    <div class="c-profit-calc mt-profit-calc-sec__first" data-profit-calc-active-plan="gold">
                        <div class="radio-form" style="padding-top: 5px;">
                            <div class="col-lg-4">
                                <label class="radio-control">
                                    <input type="radio" name="money" value="Global Start" checked="checked"/>
                                    <div class="radio-input"  >
                                        <span>GLOBAL START</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="radio-control">
                                    <input type="radio" name="money" value="Global Business" />
                                    <div class="radio-input">
                                        <span>GLOBAL BUSINESS</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="radio-control">
                                    <input type="radio" name="money" value="Global Vip" />
                                    <div class="radio-input">
                                        <span>GLOBAL VIP</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="c-profit-calc__results-wrapper">
                            <div class="range-slider" style="width: 100%;">
                                <input id="rs-range-line" class="rs-range" type="range" value="1000" min="100" max="100000">
                            </div>
                            <div class="mt-3"></div>
                            <div class="">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                        <div class="c-profit-calc__result c-profit-calc__result--eq">
                                            <div class="c-profit-calc-kv has-active-bg-color">
                                                <div class="c-profit-calc-kv__v" data-profit-calc="total_profit"  id="rs-bullet" >100</div>
                                                <div class="c-profit-calc-kv__k"> Suma <br>investment</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                        <div class="c-profit-calc__result c-profit-calc__result--eq">
                                            <div class="c-profit-calc-kv has-active-bg-color">
                                                <div class="c-profit-calc-kv__v" data-profit-calc="total_profit">$<span id="sum2">1</span></div>
                                                <div class="c-profit-calc-kv__k">Profit <br> +1% in a day</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-profit-calc__actions">
                            <a href="#" class="btn btn-round btn-primary ">INVEST</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="section" id="ecosystems" style="margin-top: 30px;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="AI">HOW IT WORKS? </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block nk-block-features-s2">
                    <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                        <div class="col-lg-5">
                            <div class="gfx py-4 mx-auto mx-lg-0 animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                <a href="https://www.youtube.com/watch?v=Fm1pQZxbiSs" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                </a>
                                <img src="{{asset('../images/gif.gif')}}" alt="img">
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-7">
                            <!-- Section Head @s -->
                            <div class="nk-block-text pdb-r">
                                <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                    INSTRUCTIONS FOR WORK WITH <span style="color: white; font-weight: 900;">Global</span><span  style="color: white; "> incom</span></h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">To participate in the program, the user must register in his personal account, indicating there his full name, phone number, postal address and referral code, after which it is necessary to verify the mail.</p>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">Go to the "accounts" section, select the "bonus account" subsection there. In this section, you need to generate your personal crypto wallet number to which you can send crypto currency.</p>
                            </div><!-- .section-head @e -->
                            <div class="row gutter-vr-20px flex-wrap">
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Registration and verification of mail.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Top up your balance.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Start of trading on the cryptocurrency market.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Withdrawing funds from the account.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </section>
        <!-- // -->
        <section class="section" id="platform">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="Conditions">PARTNERSHIP PROGRAM</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">
                                Thanks to a successful referral system, your career growth now depends - only on your activity.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <ul class="nav tab-nav tab-nav-btn-bdr-s2 justify-content-center justify-content-sm-between pb-4 pb-sm-5">
                                <li><a class="active" data-toggle="tab" href="#tab-1-1">CONDITIONS</a></li>
                                <li class="tab-nav-sap d-none d-sm-block"></li>
                                <li><a data-toggle="tab" href="#tab-1-2">BONUS +</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1-1">
                            <div class="row align-items-center justify-content-between gutter-vr-40px">
                                <div class="col-lg-5 order-lg-last">
                                    <div class="nk-block-img nk-block-ca">
                                        <div class="nk-circle-animation nk-df-center fast"></div><!-- .circle-animation -->
                                        <img src="{{asset('../images/bit.png')}}" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="nk-block-text mgb-m30">
                                        <h2 class="title title-md">Affiliate Program Terms</h2>
                                        <p>
                                            We offer effective tools for work, as well as generous rewards and bonuses with career opportunities.</p>
                                        <div class="feature feature-inline feature-middle">
                                            <div class="feature-text">
                                                <p>Purchase of GLOBAL tariff packages takes place with fixing funds at the current exchange rate in USD and payments are made in USDT.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>The packages are credited once a week on a fixed day, the commission for withdrawing funds is 2.5%.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>
                                                    The time limit for processing the application is 72 hours, to submit a new application for withdrawal of funds, the previous application for withdrawal of funds must be processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','proposal')}}" class="btn btn-round btn-primary ">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-1-2">
                            <div class="row align-items-center justify-content-between gutter-vr-40px">
                                <div class="col-lg-5 order-lg-last">
                                    <div class="nk-block-img nk-block-ca">
                                        <div class="nk-circle-animation nk-df-center fast"></div><!-- .circle-animation -->
                                        <img src="{{asset('../images/eth.png')}}">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="nk-block-text mgb-m30">
                                        <h2 class="title title-md">Conditions for additional earnings.</h2>
                                        <p>We are glad to announce that as part of the development of the GLOBAL incom platform, a profitable program has been launched that allows you to earn extra money for simple actions.</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Shoot a short video on Instagram Stories and share your experience of investing in GLOBAL incom.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Write an article on your visited resource and tell about the advantages of the platform in it, share your opinion and give feedback.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Shoot a video about the platform, with active links, share your experience of investing in GLOBAL incom, post a video on YouTube.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','bonus')}}" class="btn btn-round btn-primary ">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container -->
        </section>
        <section class="section section-wallet" id="app-download">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="APP">App for mobile devices</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-text-wrap">
                    <div class="row align-items-center justify-content-center flex-row-reverse">
                        <div class="col-lg-5 col-md-10 text-center">
                            <div class="nk-block-text">
                                <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Our application<br class="d-none d-md-block"> for convenient work</h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Trades, the latest news, promotions and bonuses, the latest information on your earnings, all in your phone. With Global income, the path to financial independence is even more accessible.</p>
                                <div class="feature-text mt-4">
                                    <ul class="btn-grp btn-grp-s2 mt-0">
                                        <li><a href="#" class="btn-download google-play"><img src="{{asset('../images/google-play.png')}}" alt="img"></a></li>
                                        <li><a href="#" class="btn-download app-store"><img src="{{asset('../images/apps-store.png')}}" alt="img"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mb-4 mb-lg-0 text-lg-left">
                            <div class="nk-block-img bg-pattern-dots-color">
                                <div class="app-slide-wrap animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                    <div class="app-slide">
                                        <img src="../images/app-screens/a3.png" alt="App Screen">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .block @e -->
            </div>

        </section>
        <section class="section" id="ecosystems" style="margin-top: 30px;">

            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="">INDICATORS </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="row gutter-vr-40px justify-content-between">
                    <div class="col-xxl-6 col-xl-5 col-lg-5">
                        <div class="progress-wrap progress-wrap-point">
                            <ul class="progress-info progress-info-s2">
                                <li>Attracted -  <span>$10,12 million.</span></li>
                                <li class="text-right">Goal - <span>$150,00 million.</span></li>
                            </ul>
                            <div class="progress-bar progress-bar-xs">
                                <div class="progress-percent progress-percent-s2" data-percent="30"></div>
                                <div class="progress-point" data-point="25">START COMPANY</div>
                                <div class="progress-point" data-point="55">SUSTAINABLE DEVELOPMENT</div>
                                <div class="progress-point" data-point="85">CRYPTO ACADEMY</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 text-center text-sm-left">
                        <div class="row justify-content-around gutter-vr-30px">
                            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-5">
                                <div class="status-info">
                                    <h6 class="title title-xxs tc-default status-title ttu">PARTNERS</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+3128</h3>
                                    <div class="fz-8">Joined the project</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-7 col-xl-7">
                                <div class="status-countdown float-sm-right">
                                    <h6 class="title title-xxs tc-default status-title ttu">CLIENTS</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+13890</h3>
                                    <div class="fz-8">Joined the project</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="section " id="tokensale">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="GLOBAL GIVING">
                                CHARITY</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;"><span style="color: white; font-weight: 900;">Global</span><span  style="color: white; "> incom</span> -
                                making life better.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="row align-items-center gutter-vr-50px">
                        <div class="col-xxl-4 col-lg-6 px-xl-5 order-xl-1">
                            <canvas class="chart-canvas" id="token-distribution"></canvas>
                        </div>
                        <div class="col-xxl col-lg-6">
                            <ul class="chart-data-s2 row" data-canvas="token-distribution" data-canvas-type="pie" data-border-color="#0f1932">
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Child protection fund" data-title="Child protection fund" data-subtitle="(more than $ 1 million)" data-amount="45"></li>
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Support for people with disabilities" data-title="Support for people with disabilities" data-subtitle="($ 0.52 million)" data-amount="25"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Combating climate change" data-title="Combating climate change" data-subtitle="(0.16 million)" data-amount="8"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Protecting the environment and earth" data-title="Protecting the environment and earth" data-subtitle="(0.25 million)" data-amount="12"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Stop Violence Against Women" data-title="Stop Violence Against Women" data-subtitle="(0.12 млн.)" data-amount="6"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Fighting COVID-19 around the world" data-title="Fighting COVID-19 around the world" data-subtitle="(0.08 million)" data-amount="4"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" style=" ">

            <div class="container container-xxl" style="padding-bottom: 70px; padding-top: 70px;">
                <div class="nk-block">
                    <div class="row justify-content-between gutter-vr-100px">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2 text-center ">
                                <h2 class="title" title="YouTube">YouTube</h2>
                            </div>
                            <div class="nk-block">
                                <div class="has-carousel carousel-nav-center pdb-l" data-items="1" data-navs="true">
                                    <div class="item pb-3">
                                        <div class="row justify-content-center gutter-vr-30px">
                                            <div class="nk-block-video tc-light">
                                                <img src="{{asset('../images/youtube1.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=gGyfM7mY044" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item pb-3">
                                        <div class="row justify-content-center gutter-vr-30px">
                                            <div class="nk-block-video tc-light">
                                                <img src="{{asset('../images/video/a2.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=JtZi8HTDxMs" class="nk-block-video-play video-popup btn-play btn-play-s3">
                                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-5">
                            <div class="section-head section-head-s2 text-center">
                                <h2 class="title" title="NEWS">NEWS</h2>
                            </div>
                            <div class="nk-block">
                                <div class="has-carousel carousel-nav-center" data-items="1" data-navs="true">
                                    @foreach($news as $new)
                                        <div class="item pb-2">
                                            <div class="blog blog-s2">
                                                <div class="blog-content blog-content-inline">
                                                    <div class="blog-text">
                                                        <h5 class="blog-title title-sm">{{ \Illuminate\Support\Str::limit($new->title1, 50, $end='...') }}</h5>
                                                    </div>
                                                    <div class="blog-action">
                                                        <a href="{{route('show.news', $new)}}" class="link"><span> More</span> <em class="link-icon link-icon-sm fas fa-angle-right"></em></a>
                                                    </div>
                                                </div>
                                                <div class="bg-image round" data-overlay="theme" data-opacity="85">
                                                    <img src="{{asset('../images/azalea/news-hr-a.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div><!-- .container -->

        </section>
        <!-- // -->
        <section class="section" id="faqs" style="margin-bottom: 150px; ">

            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="section-head section-head-s2">
                            <h2 class="title title-xl" title="FAQS">FAQS</h2>
                            <p>Below we’ve provided a bit of ICO, Token, cryptocurrencies, and few others. If you have any other questions, please get in touch.</p>
                        </div>
                    </div>
                </div>
                <!-- Block @s -->
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="nav tab-nav tab-nav-btn tab-nav-btn-bdr tab-nav-center pdb-r">
                                <li><a class="active" data-toggle="tab" href="#tab-2-1">ACCESS TO ACCOUNT</a></li>
                                <li><a data-toggle="tab" href="#tab-2-2">FINANCIAL OPERATIONS</a></li>
                                <li><a data-toggle="tab" href="#tab-2-4">ABOUT</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-2-1">
                                    <div class="accordion" id="acc-1">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-1-1">How do I register an account? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-1" class="collapse show" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        To register an account, you must click the "register" button located in the upper right corner of the site and fill out the registration form, indicating your data.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-2">Forgot your username / password?<span class="accordion-icon"></span></h5>
                                            <div id="acc-1-2" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        If you forgot your username and password, you can restore them through the appropriate button on the authorization page in your personal account. The link for recovery will be sent to the email address specified during registration.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-3">Having trouble signing in to your account?  <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-3" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        If you encounter problems that you could not find the answer to in this section, you need to write to the support email address.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-2">
                                    <div class="accordion" id="acc-2">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-2-1">How long does it take to process a withdrawal request? <span class="accordion-icon"></span></h5>
                                            <div id="acc-2-1" class="collapse show" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>The execution of the request for withdrawal of funds to the clients' wallets occurs automatically instantly, however, for unforeseen situations, the company reserves itself 72 hours to execute the application.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-2">Company commission?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-2" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>The only commission charged by the company is a withdrawal commission in the amount of 2.5 percent of the withdrawal amount in dollars, it is calculated automatically and deducted from the withdrawal amount.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-3">Minimum withdrawal amount?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-3" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>The minimum withdrawal amount is $ 100.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-4">How do I withdraw funds?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-4" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>You can leave a request for withdrawal of funds by clicking the withdrawal button in the "" section in your personal account, while you will need to indicate the number of your crypto wallet in the payment system.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-5">How to buy cryptocurrency?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-5" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Currently, in the world there are many options for how to purchase crypto currency, for example, through the popular payment systems Peyer, or crypto exchanges.
                                                        If it's hard for you to master online methods of buying crypto currency, then you can use exchange offices. In addition, the system provides an internal transfer function, so you can top up your balance through a "payment agent" (a client with a replenished balance, who will be able to top up the balance from his account).

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-6">Deposit and Withdrawal Process?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-6" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>To replenish your balance, first of all, you need to register in your personal account, familiarize yourself with the offer agreement, and confirm your agreement with it, then go to the "accounts" section, select the "bonus account" subsection there. In this section, you need to generate your personal crypto wallet number, to which you can send the corresponding crypto currency. Upon arrival of crypto currency to this wallet, the balance is automatically replenished in accordance with the market rate. The account to be replenished is not a trading account, therefore it is necessary to transfer the received funds to the trading account.
                                                        To withdraw, you need to click the withdraw button in the "bonus account" section and indicate the number of your crypto wallet.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-4">
                                    <div class="accordion" id="acc-4">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-4-1">How does the platform make money?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-1" class="collapse show" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>This is probably the most important question. The company makes money from the difference in the value of crypto currencies in the global market, using its own technological developments in the field of artificial intelligence, machine learning, coupled with the use of behavioral analysis of traders and constant monitoring of social networks of people who form the opinion of the "crowd". Currently, our company is patenting this technology for use in hedge funds.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-2">
                                                If the company is so successful in the cryptocurrency trading market, why do you need the funds raised?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-2" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Our trading system works under certain conditions according to a certain strategy, and its efficiency directly depends on the volume of the amounts involved in operations. In addition, large lots of transactions allow manipulating the market with a small volume of trading operations on the exchange. And what is important, we do not use leverage when performing trading operations, which allows us to avoid significant risks and allows us to hedge our positions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-3">Why does your company trade in cryptocurrencies?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-3" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Recently, the cryptocurrency market has grown tremendously, its capitalization has exceeded $ 2 trillion, leading American investment houses have created cryptocurrency trading units such as JP Morgan Chase, Goldman Sacks, Bank of America, the popularity of bitcoin has led to its use by such payment systems as Pay Pall. Tesla began accepting bitcoins as payment for cars. The legalization of crypto currencies all over the world increases the liquidity of the crypto currency market and allows you to trade in large volumes and get more profit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-4">Does AI only trade Bitcoin?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-4" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>
                                                        No, trading can be carried out with any crypto asset depending on the market conditions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-5">
                                                If AI is so smart, why don't you trade in the stock market, where market liquidity is maximum and there are no problems with borrowed funds?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-5" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>In order for our trading strategy to work correctly, we need a large volatility in the price of an asset, which is a rarity in the stock market. In addition, shares have additional points of price uncertainty, such as financial statements or economic unpredictable factors, or political decisions in relation to companies. Crypto currencies do not have all of this, which allows us to more consistently carry out trading operations with a predictable result.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-6">
                                                What cryptocurrency market are you trading in?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-6" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>The beauty of cryptocurrencies is that people are not tied to a specific platform and can transfer assets from one trading platform to another in a matter of minutes if the trading situation requires it. But nevertheless, we cooperate with 12 major trading platforms and providers of transaction liquidity such as: Binance, Binance Futures, Currency.com, EXMO, Payeer Exchange, ByBit, Bitmex, Cex.io, Free2ex, Huobi, FTX, OKEx.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-7">Why do you accept money and withdraw only in cryptocurrency? Don't use payment systems?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-7" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Everything is very easy here, all payment systems have many restrictions for different countries, in particular for cross-border payments, in addition, payment systems can independently block users and dictate their conditions. Crypto currencies do not have such restrictions, this is real freedom. As the freedom of will what you do with your assets and the freedom of transfers. At the same time, as a company that knows how and counts money, we do not want to give your and our money for servicing payment systems.
                                                        You probably didn’t know that payment systems charge 4 percent for transactions, and sometimes the percentages for deposits and withdrawals go up to 10. Of course, we can implement such solutions, but only at your expense. We think that no one is interested in this, because we are for profit and optimize all business processes as much as possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-8">Where is the head office of the company?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-8" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Our company does not have a head office, since the pandemic showed the inability of this business solution, for the period of lockdowns, our company dispersed literally to all parts of the world, programmers work in the CIS and Europe, artificial intelligence specialists live in New York and Los Angeles, marketers and designers have chosen warm creative countries and we encourage this. Our team is truly multinational and confessional and we are proud of this, as our company is a transnational project of financial freedom for all.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .block @e -->
            </div>

        </section>
        <!-- // -->
        <section class="section" id="contact">

            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-contact">
                    <div class="row justify-content-between align-items-center gutter-vr-50px">
                        <div class="col-lg-6">
                            <div class="nk-block-text">
                                <div class="nk-block-text-head">
                                    <h2 class="title title-lg ttu">CONTACT US</h2>
                                    <p>We are always open and we welcome and questions you have for our team. If you wish to get in touch, please fill out the form below. Someone from our team will get back to you shortly.</p>
                                </div>
                                <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="field-item">
                                                <label class="field-label ttu">Your Name</label>
                                                <div class="field-wrap">
                                                    <input name="name" id="name" placeholder="Introduce yourself" type="text" class="input-bordered required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="field-item">
                                                <label class="field-label ttu">Your Email</label>
                                                <div class="field-wrap">
                                                    <input name="email" id="email" placeholder="Who do we replay to" type="email" class="input-bordered required email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field-item">
                                        <label class="field-label ttu">Your Message </label>
                                        <div class="field-wrap">
                                            <textarea name="massages"  id="massages" placeholder="Leave your question or comment here" class="input-bordered input-textarea required"></textarea>
                                        </div>
                                    </div>
                                    <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <button type="submit" class="btn btn-round btn-primary ">SEND</button>
                                        </div>
                                        <div class="col-sm-7 order-sm-first">
                                            <div class="form-results"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 text-center order-lg-first">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                                    {
                                        "interval": "1m",
                                        "width": "370",
                                        "isTransparent": true,
                                        "height": "300",
                                        "symbol": "COINBASE:BTCUSD",
                                        "showIntervalTabs": true,
                                        "locale": "uk",
                                        "colorTheme": "dark"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div><!-- .block @e -->
            </div>
        </section>
    </main>

@endsection
