@extends('layouts.appru')
@section('title', 'Globinc - Passive income on the crypto exchange.')
@section('meta', 'Passive income✔ making incom on the Internet ✔ buy bitcoin ✔ everything about the crypto exchange - Globinc, your way to success.')
@section('keywords', 'Passive income | Globinc')
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
                                <h1 class="title title-xl title-glob ns" title="" style=""><span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; font-weight: 300;"></span></h1>
                                <h3 class="title title-xl title-glob" title="В БУДУЩЕЕ" style="padding-bottom: 10px;">путь к успеху!</h3>
                            </div>
                            <p class="lead" style="font-size: 1.3rem; color: #dabd75;">Зарабатывай на разнице стоимости крипто валют на мировом рынке, используя технологические разработки компании <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> в области AI </p>
                            <div class="cpn-action" >
                                <a class="btn btn-primary btn-round " href="https://my.globinc.com/auth/register" style="font-size:15px; margin-bottom: 10px;">зарегистрироваться</a>
                                <a class="btn btn-primary btn-thin btn-outline btn-auto btn-primary btn-round no-change " href="{{asset('../pdf/Globinc.pdf')}}"  target="_blank" style="font-size:15px; margin-bottom: 10px;">скачать презентацию</a>
                            </div>
                            <h1 class="title title-xl title-glob" title="В БУДУЩЕЕ" style=" ">Прибыль в месяц от<span  style="font-weight: 900; color: #dabd75; font-size: 69px; ">  30%</span></h1>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="status-countdown float-sm-right">
                        <h6 class="title title-xxs tc-default status-title ttu" style="text-align: center !important;">Скоро старт проекта</h6>
                        <div class="countdown justify-content-center justify-content-sm-start countdown-s3 countdown-s3-alt" data-date="2021/08/05" data-day-text="Дней"   data-hour-text="Часов" data-min-text="Минут" data-sec-text="Секунд"></div>
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
                <div class="row justify-content-lg-between justify-content-center align-items-center gutter-vr-30px" style="padding-top: 20px;">
                    <div class="col-lg-5">
                        <div class="nk-block-text text-center text-lg-left">
                            <h2 class="title title-thin title-dark">ВИДЕО ОБЗОР ПРОЕКТА</h2>
                        </div>
                        <p style="font-size: 1.4rem; color: #dabd75;">С командой <span style="font-weight: 900; color: #faf8f8;">Globinc</span><span style="color: #f5f1f1;"></span> кризиса не существует</p>
                    </div>
                    <div class="col-lg-6 col-mb-10 order-lg-last">
                        <div class="nk-block-img">
                            <a href="{{asset('../video/Globinc.mp4')}}" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                            </a>
                            <img src="{{asset('../images/app-screens/sc-large-a2.png')}}" alt="img" style="padding: 10px;">
                        </div>
                    </div>
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
                            <h2 class="title title-xl" title="Global Package">ТАРИФНЫЕ ПАКЕТЫ</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">Инвестируй вместе с нами. <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> это твой шанс на успех и финансовую свободу.</p>
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
                                        <h6>Минимальная сумма <span  class="token-stage-bonus">$100</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальная сумма <span  class="token-stage-bonus">$999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Количество покупок <span  class="token-stage-bonus">2</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Доход в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сумма к снятию <span  class="token-stage-bonus">70%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореинвест <span  class="token-stage-bonus">30%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Возврат депозита в конце срока <span  class="token-stage-bonus">нет</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Первая выплата <span  class="token-stage-bonus">18 дней</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ИНВЕСТИРОВАТЬ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s3.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL BUSINESS</div>
                                    <div class="token-stage-date">
                                        <h6>Минимальная сумма <span  class="token-stage-bonus">$1000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальная сумма <span  class="token-stage-bonus">$4999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Количество покупок <span  class="token-stage-bonus">неограниченно</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Доход в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сумма к снятию <span  class="token-stage-bonus">80%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореинвест <span  class="token-stage-bonus">20%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Возврат депозита в конце срока <span  class="token-stage-bonus">нет</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Первая выплата <span  class="token-stage-bonus">12 дней</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ИНВЕСТИРОВАТЬ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s2.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL VIP</div>
                                    <div class="token-stage-date">
                                        <h6>Минимальная сумма <span  class="token-stage-bonus">$5000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальная сумма <span  class="token-stage-bonus">неограниченно</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Количество покупок <span  class="token-stage-bonus">неограниченно</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Доход в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сумма к снятию <span  class="token-stage-bonus">90%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореинвест <span  class="token-stage-bonus">10%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Возврат депозита в конце срока <span  class="token-stage-bonus">нет</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Первая выплата <span  class="token-stage-bonus">8 дней</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ИНВЕСТИРОВАТЬ</a>
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
                            <h2 class="title title-xl" title="Result">КАЛЬКУЛЯТОР </h2>
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
                                    <h5 class="mt-apc__title">Условия партнёрской программы</h5>
                                    <div class="mt-apc__list">
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Тарифный пакет
                                            </div>
                                            <div class="mt-apc__li-v" data-profit-calc="direct_bonus" id="packages">Global Start</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Сумма к снятию</div>
                                            <div class="mt-apc__li-v" id="sumToWithdraw">70%</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Первая выплата</div>
                                            <div class="mt-apc__li-v" data-profit-calc="binary_bonus"><span  id="beginningOfWork">18</span> дней</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Минимальная сумма</div>
                                            <div class="mt-apc__li-v" id="minimumSum">$151</div>
                                        </div>
                                        <br>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k" style="font-weight: bold; font-size: 14px!important;">Общий результат за 365 дней</div>
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
                                        <div class="radio-input">
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
                                    <input id="rs-range-line" class="rs-range" type="range"  type="range" value="1000" min="100" max="100000">
                                </div>
                                <div class="mt-3"></div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                            <div class="c-profit-calc__result c-profit-calc__result--eq">
                                                <div class="c-profit-calc-kv has-active-bg-color" style="width: 100%;">
                                                    <div class="c-profit-calc-kv__v" data-profit-calc="total_profit"  id="rs-bullet" >100</div>
                                                    <div class="c-profit-calc-kv__k"> Сумма <br>инвестиций</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                            <div class="c-profit-calc__result c-profit-calc__result--eq">
                                                <div class="c-profit-calc-kv has-active-bg-color">
                                                    <div class="c-profit-calc-kv__v" data-profit-calc="total_profit">$<span id="sum2">1</span></div>
                                                    <div class="c-profit-calc-kv__k">Прибыль <br> +1% в день</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-profit-calc__actions">
                                <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">Инвестировать</a>
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
                            <h2 class="title title-xl" title="AI">КАК ЭТО РАБОТАЕТ? </h2>
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
                                <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">ИНСТРУКЦИЯ ПО РАБОТЕ С <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span></h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Для участия в программе пользователь должен осуществить регистрацию в личном кабинете, указав там ФИО, номер телефона, почтовый адрес и реферальный код, после чего необходимо верифицировать почту.</p>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">Пройдите в раздел «счета», выберите подраздел «бонусный счет».  В данном разделе необходимо сгенерировать свой личной номер крипто кошелька, на который вы сможете отправить  крипто валюту.</p>
                            </div><!-- .section-head @e -->
                            <div class="row gutter-vr-20px flex-wrap">
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Регистрация и верификация почты.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Пополнения своего баланса.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Старт торгов на рынке криптовалют.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Вывод денежных средств со счета.</p>
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
                            <h2 class="title title-xl" title="Условия">ПАРТНЁРСКАЯ ПРОГРАМА</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">Благодаря удачной реферальной системе, твой карьерный рост теперь зависит - только от твоей активности</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <ul class="nav tab-nav tab-nav-btn-bdr-s2 justify-content-center justify-content-sm-between pb-4 pb-sm-5">
                                <li><a class="active" data-toggle="tab" href="#tab-1-1">УСЛОВИЯ</a></li>
                                <li class="tab-nav-sap d-none d-sm-block"></li>
                                <li><a data-toggle="tab" href="#tab-1-2">БОНУС+</a></li>
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
                                        <h2 class="title title-md">Условия партнёрской программы</h2>
                                        <p>Мы предлагаем эффективные инструменты работы, а также щедрые вознаграждения  и бонусы с возможностью карьерного роста.</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Приобретение тарифных пакетов GLOBAL происходит по фиксированной цене, по актуальному курсу в USD и выплаты производятся в USDT.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Начисление по пакетам происходит 1 раз в неделю в фиксированный день, комиссия за вывод денежных средств - 2,5%.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Регламент обработки заявки 72 часа. Подача новой заявки на вывод средств возможна, если предыдущая заявка обработана.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','proposal')}}" class="btn btn-round btn-primary ">узнать подробнее</a>
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
                                        <h2 class="title title-md">Условия дополнительного заработка.</h2>
                                        <p>Рады сообщить, что в рамках развития платформы Globinc начала работу выгодная программа, позволяющая дополнительно зарабатывать за несложные действия.</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Снимите короткое видео в Stories Instagram и поделитесь своим опытом инвестирования в Globinc.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Напишите статью на своем посещаемом ресурсе и расскажите  в ней о преимуществах платформы, поделитесь мнением и выскажите отзыв.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Снимите видео о платформе, с активным ссылками, поделитесь своим опытом инвестирования в Globinc, разместить видео в ютубе.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','bonus')}}" class="btn btn-round btn-primary ">узнать подробнее</a>
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
                            <h2 class="title title-xl" title="APP">Приложения для мобильных устройств</h2>
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
                                <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Наше приложение <br class="d-none d-md-block"> для удобной работы</h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Торги, последние новости, акции и бонусы, последняя информация по вашим поступлениям и все это в вашем телефоне. С Globinc путь к финансовой независимости еще доступнее.</p>
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
                                        <img src="{{asset('../images/app-screens/a3.png')}}" alt="App Screen">
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
                            <h2 class="title title-xl" title="">ПОКАЗАТЕЛИ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="row gutter-vr-40px justify-content-between">
                    <div class="col-xxl-6 col-xl-5 col-lg-5">
                        <div class="progress-wrap progress-wrap-point">
                            <ul class="progress-info progress-info-s2">
                                <li>Привлечено -  <span>$10,12 млн.</span></li>
                                <li class="text-right">Цель - <span>$150,00 млн.</span></li>
                            </ul>
                            <div class="progress-bar progress-bar-xs">
                                <div class="progress-percent progress-percent-s2" data-percent="30"></div>
                                <div class="progress-point" data-point="25">СТАРТ КОМПАНИИ</div>
                                <div class="progress-point" data-point="55">УСТОЙЧИВОЕ РАЗВИТИЕ</div>
                                <div class="progress-point" data-point="85">КРИПТО АКАДЕМИЯ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 text-center text-sm-left">
                        <div class="row justify-content-around gutter-vr-30px">
                            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-5">
                                <div class="status-info">
                                    <h6 class="title title-xxs tc-default status-title ttu">ПАРТНёРОВ</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+3128</h3>
                                    <div class="fz-8">Присоединилось к проекту</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-7 col-xl-7">
                                <div class="status-countdown float-sm-right">
                                    <h6 class="title title-xxs tc-default status-title ttu">КЛИЕНТОВ</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+13890</h3>
                                    <div class="fz-8">Присоединилось к проекту</div>
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
                            <h2 class="title title-xl" title="GLOBAL GIVING">БЛАГОТВОРИТЕЛЬНОСТЬ</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;"><span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> - делаем жизнь лучше</p>
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
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Фонд защиты детей" data-title="Фонд защиты детей" data-subtitle="(более $1 млн.)" data-amount="45"></li>
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Поддержка людей с ограниченными возможностями" data-title="Поддержка людей с ограниченными возможностями" data-subtitle="($0.52 млн.)" data-amount="25"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Борьба с изменением климата" data-title="Борьба с изменением климата" data-subtitle="(0.16 млн.)" data-amount="8"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Защита окружающей среды и земли" data-title="Защита окружающей среды и земли" data-subtitle="(0.25 млн.)" data-amount="12"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Остановить насилие в отношении женщин" data-title="Остановить насилие в отношении женщин" data-subtitle="(0.12 млн.)" data-amount="6"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Борьба с COVID-19 в мире" data-title="Борьба с COVID-19 в мире" data-subtitle="(0.08 млн.)" data-amount="4"></li>
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
                                                <img src="{{asset('../images/start2.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=a4ld5Lv_b8k" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item pb-3">
                                        <div class="row justify-content-center gutter-vr-30px">
                                            <div class="nk-block-video tc-light">
                                                <img src="{{asset('../images/video/a2.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=QvYE5CLqPHs" class="nk-block-video-play video-popup btn-play btn-play-s3">
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
                                <h2 class="title" title="NEWS">НОВОСТИ</h2>
                            </div>
                            <div class="nk-block">
                                <div class="has-carousel carousel-nav-center" data-items="1" data-navs="true">
                                    @foreach($news as $new)
                                    <div class="item pb-2">
                                        <div class="blog blog-s2">
                                            <div class="blog-content blog-content-inline">
                                                <div class="blog-text">
                                                    <h5 class="blog-title title-sm">{{ \Illuminate\Support\Str::limit($new->title, 50, $end='...') }}</h5>
                                                </div>
                                                <div class="blog-action">
                                                    <a href="{{route('show.news', $new)}}" class="link"><span> Подробнее</span> <em class="link-icon link-icon-sm fas fa-angle-right"></em></a>
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
                            <p>Ниже приведены часто задаваемые вопросы. Если у вас есть другие вопросы, свяжитесь с нами</p>
                        </div>
                    </div>
                </div>
                <!-- Block @s -->
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="nav tab-nav tab-nav-btn tab-nav-btn-bdr tab-nav-center pdb-r">
                                <li><a class="active" data-toggle="tab" href="#tab-2-1">ДОСТУП К АКАУНТУ</a></li>
                                <li><a data-toggle="tab" href="#tab-2-2">ФИНАНСОВЫЕ ОПЕРАЦИИ</a></li>
                                <li><a data-toggle="tab" href="#tab-2-4">О ПРОЕКТЕ</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-2-1">
                                    <div class="accordion" id="acc-1">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-1-1">Как зарегистрировать аккаунт? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-1" class="collapse show" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>Что бы зарегистрировать аккаунт необходимо нажать кнопку «регистрация», расположенную в верхнем правом углу на сайте и заполнить форму регистрации, указав свои данные.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-2">Забыли логин/пароль? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-2" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>В случае если забыли логин и пароль, то их можно восстановить через соответствующую кнопку на странице авторизации в личный кабинет. Ссылка на восстановление придет на адрес электронной почты, указанный при регистрации.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-3">Возникли проблемы со входом в учетную запись?  <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-3" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>При возникновении проблем, на которые вы не смогли найти ответ в данном разделе, необходимо написать на адрес электронной почты сапорта.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-2">
                                    <div class="accordion" id="acc-2">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-2-1">Время обработки заявки на вывод средств? <span class="accordion-icon"></span></h5>
                                            <div id="acc-2-1" class="collapse show" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Исполнение заявки на вывод денежных средств на кошельки клиентов происходит в автоматическом режиме моментально, однако для непредвиденных ситуаций компания оставляет себе 72 часа на исполнение заявки.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-2">Комиссия компании?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-2" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Единственная комиссия, которую взимает компания является комиссией на вывод денежных средств в размере 2,5 процента от суммы вывода в долларах, она рассчитывается автоматически и списывается с суммы вывода. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-3">Минимальная сумма вывода?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-3" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Минимальной суммой для вывода является 151 долларов США.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-4">Как вывести средства?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-4" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Заявку на вывод денежных средств можно оставить нажав кнопку вывод в разделе  « в личном кабинете, при этом необходимо будет указать номер своего крипто кошелька в платежной системе.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-5">Как купить криптовалюту?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-5" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>В настоящее время в мире существует множество вариантов как приобрести крипто валюту, например через популярные платежные системы Пейер, либо крипто биржи. Если вам тяжело освоить онлайн способы покупки крипто валюты то можно воспользоваться обменными пунктами. Кроме того, в системе предусмотрена функция внутреннего перевода, поэтому вы можете пополнить баланс через «платежного агента» (клиента с пополненным балансом, который сможет вам со своего счета пополнить баланс».

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-6">Процесс депозита и вывода?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-6" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Для пополнения своего баланса, в первую очередь надо зарегистрироваться в личном кабинете, ознакомиться с договором оферты, и потвердеть согласие с ним, после чего пройти в раздел «счета», выбрать там подраздел «бонусный счет».  В данном разделе необходимо сгенерировать свой личной номер крипто кошелька, на который вы сможете отправить соответствующую крипто валюту. По приходу крипто валюты на данный кошелек, баланс автоматически пополняется в соответствии с рыночным курсом. Пополняемый счет не является торговым, поэтому надо осуществить перевод на торговый счет поступившие денежные средства.
                                                        Для вывода необходимо в разделе «бонусный счет» нажать кнопку вывод и указать номер своего крипто кошелька.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-4">
                                    <div class="accordion" id="acc-4">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-4-1">Как платформа зарабатывает деньги? <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-1" class="collapse show" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Это наверное самый важный вопрос. Компания зарабатывает деньги на разнице стоимости крипто валют на мировом рынке, использую собственные технологические разработки в области искусственного интеллекта, машинного обучения, сопряженного с использованием поведенческого анализа трейдеров и постоянного мониторинга социальных сетей лиц, формирующих мнение «толпы». В настоящее время, наша компания осуществляет патентование данной технологии, для использования ее в хедж фондах.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-2">Если компания такая успешная на рынке торговли крипто валютами, то зачем вам привлеченные денежные средства?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-2" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Наша торговая система работает в определенных условиях по определенной стратегии, и ее эффективность напрямую зависит от объема участвующих в операциях суммах. Кроме того большие лоты сделок позволяют манипулировать рынком при небольшом объеме торговых операций на бирже. И что немало важно, при осуществлении торговых операций мы не используем кредитное плечо, что позволяет нам избежать существенных рисков и позволяет хеджировать наши позиции.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-3">Почему ваша компания торгует именно криптовалютами? <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-3" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>В последнее время рынок криптовалют сильно вырос, его капитализация превысила $2 трлн, передовые американские инвест дома создали подразделения по торговле крипто валютами такие как JP Morgan Chase, Goldman Sacks, Bank of America, популярность биткиона привели к его использованию такие платежные системы как Pay Pall, автопроизводитель тесла стал принимать биткоины в качестве оплаты за автомобили. Легализация крипто валют во всем мире повышает ликвидность рынка крипто валют и позволяет торговать большими объемами и получать больший профит.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-4">AI торгует только Биткоином? <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-4" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Нет, торговля может осуществляется любым крипто активом в зависимости от рыночной конъюнктуры.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-5">Если AI такой умный, то почему вы не торгуете на фондовом рынке, где ликвидность рынка максимальная и нет проблем в заемных средствах?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-5" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Для того что бы наша торговая стратегия работала корректно, нам нужна большая волатильность цены актива, на фондовом рынке это редкость. Кроме того, у акций имеется дополнительные точки неопределённости цены, например выход отчетности или экономические непредсказуемые факторы, либо политические решения в отношении компаний. У крипто валют всего этого нет, что позволяет нам более стабильно осуществлять торговые операции с прогнозируемом результатом.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-6">На каком рынке криптовалют вы торгуете? <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-6" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Прелесть криптовалют в том, что люди не привязаны к определённой площадке и могут в считанные минуты перекидывать активы с одной торговой площадки на другую если того требует торговая ситуация. Но тем не менее мы сотрудничаем с 12 основными торговыми площадками и поставщиками ликвидности сделок такими как: Binance, Binance Futures, Currency.com, EXMO, Payeer Exchange, ByBit, Bitmex, Cex.io, Free2ex, Huobi, FTX, OKEx.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-7">Почему вы принимаете деньги и выводите только в криптовалюте. А не используете платежные системы?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-7" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Тут все очень легко, все платежные системы имеют множество ограничений для разных стран, в частности для трансграничных платежей, кроме того платежные системы могут самостоятельно блокировать пользователей и диктовать свои условия. Таких ограничений нет у крипто валют, это настоящая свобода. Как свобода воли что ты делаешь со своими активами так и свобода переводов. При этом, мы ка компания умеющая и считающая деньги, не хотим отдавать ваши и наши деньги за облуживание платежных систем. Вы наверное не знали что платежные системы берут за транзакции по 4 процента, и за ввод и вывод иногда процента доходят до 10. Мы конечно можем внедрить такие решения, но только за ваш счет. Мы думаем, что никому это не интересно, потому что мы за профит и максимально оптимизируем все бизнес процессы.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-8">Где находится головной офис компании?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-8" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Наша компания не имеет головной офис, так как пандемия показала не состоятельность данного бизнес решения, на период локдаунов наша компания разъехалась буквально по всем частям мира, программисты работают странах СНГ и Европы, специалисты по искусственному интеллекту проживают в Нью Йорке и Лос Анджелесе, маркетологи и дизайнеры облюбовали теплые творческие страны и мы поощряем это. Наша команда во истину многонациональна и конфессиональная и мы гордимся этим, так как наша компания это межнациональный проект финансовой свободы для всех.</p>
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
{{--        <section class="section" id="contact">--}}

{{--            <div class="container">--}}
{{--                <!-- Block @s -->--}}
{{--                <div class="nk-block nk-block-contact">--}}
{{--                    <div class="row justify-content-between align-items-center gutter-vr-50px">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="nk-block-text">--}}
{{--                                <div class="nk-block-text-head">--}}
{{--                                    <h2 class="title title-lg ttu">Свяжитесь с нами</h2>--}}
{{--                                    <p>Мы всегда открыты к вопросам, которые вы задаете нашей команде. Если вы хотите с нами связаться, заполните форму ниже. Кто-то из нашей команды свяжется с вами в ближайшее время. </p>--}}
{{--                                </div>--}}
{{--                                <form method="POST" action="{{ route('massages.create') }}" >--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="field-item">--}}
{{--                                                <label class="field-label ttu">Твое имя</label>--}}
{{--                                                <div class="field-wrap">--}}
{{--                                                    <input name="name" id="name" placeholder="Представьтесь " type="text" class="input-bordered required">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="field-item">--}}
{{--                                                <label class="field-label ttu">Ваша электронная почта</label>--}}
{{--                                                <div class="field-wrap">--}}
{{--                                                    <input name="email" id="email" placeholder="Кому мы отвечаем" type="email" class="input-bordered required email">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="field-item">--}}
{{--                                        <label class="field-label ttu">Ваше сообщение </label>--}}
{{--                                        <div class="field-wrap">--}}
{{--                                            <textarea name="massages" id="massages" placeholder="Оставьте здесь свой вопрос или комментарий " class="input-bordered input-textarea required"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <input type="text" class="d-none" name="form-anti-honeypot" value="">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-5 text-right">--}}
{{--                                            <button type="submit" class="btn btn-round btn-primary ">ОТПРАВИТЬ</button>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-7 order-sm-first">--}}
{{--                                            <div class="form-results"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6  order-lg-first">--}}
{{--                            <!-- TradingView Widget BEGIN -->--}}
{{--                            <div class="tradingview-widget-container">--}}
{{--                                <div class="tradingview-widget-container__widget"></div>--}}

{{--                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>--}}
{{--                                    {--}}
{{--                                        "interval": "1m",--}}
{{--                                        "width": "370",--}}
{{--                                        "isTransparent": true,--}}
{{--                                        "height": "300",--}}
{{--                                        "symbol": "COINBASE:BTCUSD",--}}
{{--                                        "showIntervalTabs": true,--}}
{{--                                        "locale": "ru",--}}
{{--                                        "colorTheme": "dark"--}}
{{--                                    }--}}
{{--                                </script>--}}
{{--                            </div>--}}
{{--                            <!-- TradingView Widget END -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- .block @e -->--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>
@endsection
