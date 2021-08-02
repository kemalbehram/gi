@extends('layouts.appuk')
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
                        <div class="banner-caption  animated fadeInUp">
                            <div class="section-head section-head-s2" style="padding-bottom: 10px;">
                                <h1 class="title title-xl title-glob ns" title="" style=""><span style="color: white; font-weight: 900;">Globinc</span></h1>
                                <h3 class="title title-xl title-glob" title="В БУДУЩЕЕ" style="padding-bottom: 10px;">шлях до успіху!</h3>
                            </div>
                            <p class="lead" style="font-size: 1.3rem; color: #dabd75;">Заробляй на різниці вартості кріптовалют на світовому ринку, використовуючи технологічні розробки компанії <span style="color: white; font-weight: 900;">Globinc</span> в області AI. </p>
                            <div class="cpn-action" >
                                <a class="btn btn-primary btn-round " href="https://my.globinc.com/auth/register" style="font-size:15px; margin-bottom: 10px;">зареєструватися</a>
                                <a class="btn btn-primary btn-thin btn-outline btn-auto btn-primary btn-round no-change " href="{{asset('../pdf/Globinc.pdf')}}"  target="_blank" style="font-size:15px; margin-bottom: 10px;">скачати презентацію</a>
                            </div>
                            <h1 class="title title-xl title-glob" title="В БУДУЩЕЕ" style=" ">Прибуток в місяць від<span  style="font-weight: 900; color: #dabd75; font-size: 69px; ">  30%</span></h1>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="status-countdown float-sm-right">
                        <h6 class="title title-xxs tc-default status-title ttu" style="text-align: center !important;">Скоро старт проекту</h6>
                        <div class="countdown justify-content-center justify-content-sm-start countdown-s3 countdown-s3-alt" data-date="2021/08/05" data-day-text="Днів"   data-hour-text="Годин" data-min-text="Хвилин" data-sec-text="Секунд"></div>
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
                            <h2 class="title title-thin title-dark">ВІДЕО ОГЛЯД ПРОЕКТУ</h2>
                        </div>
                        <p style="font-size: 1.4rem; color: #dabd75;">З командою <span style="font-weight: 900; color: #faf8f8;">Globinc</span> кризи не існує</p>
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
                            <h2 class="title title-xl" title="Globinc Package">ТАРИФНІ ПАКЕТИ</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">Інвестуй разом з нами. <span style="color: white; font-weight: 900;">Globinc</span> - це твій шанс на успіх і фінансову незалежність.</p>
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
                                        <h6>Мінімальна сума <span  class="token-stage-bonus">$100</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальна сума <span  class="token-stage-bonus">$999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Термін роботи <span  class="token-stage-bonus">365 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Дохід в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сума до зняття <span  class="token-stage-bonus">70%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореінвест <span  class="token-stage-bonus">30%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Повернення депозиту в кінці терміну <span  class="token-stage-bonus">ні</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Перша виплата <span  class="token-stage-bonus"> 18 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ІНВЕСТУВАТИ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s3.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL BUSINESS</div>
                                    <div class="token-stage-date">
                                        <h6>Мінімальна сума <span  class="token-stage-bonus">$1000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальна сума <span  class="token-stage-bonus">$4999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Термін роботи <span  class="token-stage-bonus">365 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Дохід в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сума до зняття<span  class="token-stage-bonus">80%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореінвест <span  class="token-stage-bonus">20%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Повернення депозиту в кінці терміну <span  class="token-stage-bonus">ні</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Перша виплата <span  class="token-stage-bonus">12 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ІНВЕСТУВАТИ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s2.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL VIP</div>
                                    <div class="token-stage-date">
                                        <h6>Мінімальна сума <span  class="token-stage-bonus">$5000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Максимальна сума <span  class="token-stage-bonus">необмежено</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Термін роботи  <span  class="token-stage-bonus">365 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Дохід в день <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Сума до зняття <span  class="token-stage-bonus">90%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Автореінвест <span  class="token-stage-bonus">10%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Повернення депозиту в кінці терміну <span  class="token-stage-bonus">ні</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>Перша виплата <span  class="token-stage-bonus">8 днів</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ІНВЕСТУВАТИ</a>
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
                                    <h5 class="mt-apc__title">Умови партнерської програми</h5>
                                    <div class="mt-apc__list">
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Тарифний пакет
                                            </div>
                                            <div class="mt-apc__li-v" data-profit-calc="direct_bonus" id="packages">Global Start</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Сума до зняття</div>
                                            <div class="mt-apc__li-v" id="sumToWithdraw">70%</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Перша виплата</div>
                                            <div class="mt-apc__li-v" data-profit-calc="binary_bonus"><span  id="beginningOfWork">18</span> дней</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">Мінімальна сума</div>
                                            <div class="mt-apc__li-v" id="minimumSum">$100</div>
                                        </div>
                                        <br>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k" style="font-weight: bold; font-size: 14px!important;">Загальний результат за 365 днів</div>
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
                                                    <div class="c-profit-calc-kv__k"> Сума <br>інвестицій</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                            <div class="c-profit-calc__result c-profit-calc__result--eq">
                                                <div class="c-profit-calc-kv has-active-bg-color">
                                                    <div class="c-profit-calc-kv__v" data-profit-calc="total_profit">$<span id="sum2">1</span></div>
                                                    <div class="c-profit-calc-kv__k">Прибуток <br> +1% в день</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-profit-calc__actions">
                                <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">ІНВЕСТУВАТИ</a>
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
                            <h2 class="title title-xl" title="AI">ЯК ЦЕ ПРАЦЮЄ? </h2>
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
                                <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">ІНСТРУКЦІЯ ВИКОРИСТАННЯ <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span></h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Для участі в програмі користувач повинен здійснити реєстрацію в особистому кабінеті, вказавши там ПІБ, номер телефону, поштову адресу і реферальний код, після чого необхідно верифікувати пошту.</p>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">Пройдіть в розділ «рахунки», виберіть підрозділ «бонусний рахунок». В даному розділі необхідно згенерувати свій особистої номер кріптогаманця, на який ви зможете відправити кріптовалюту.</p>
                            </div><!-- .section-head @e -->
                            <div class="row gutter-vr-20px flex-wrap">
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>
                                                Реєстрація та верифікація пошти.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Поповнення свого балансу.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Старт торгів на ринку криптовалют.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>Виведення грошових коштів з рахунку.</p>
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
                            <h2 class="title title-xl" title="УМОВИ">ПАРТНЕРСЬКА ПРОГРАМА</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">Завдяки вдалій реферальній системі, твій кар'єрний ріст тепер залежить - тільки від твоєї активності.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <ul class="nav tab-nav tab-nav-btn-bdr-s2 justify-content-center justify-content-sm-between pb-4 pb-sm-5">
                                <li><a class="active" data-toggle="tab" href="#tab-1-1">УМОВИ</a></li>
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
                                        <h2 class="title title-md">Умови партнерської програми</h2>
                                        <p>Ми пропонуємо ефективні інструменти роботи, а також щедрі винагороди і бонуси з можливістю кар'єрного росту.</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Придбання тарифних пакетів GLOBAL відбувається за фіксованою ціною, по актуальному курсу в USD, виплати відбуваються в USDT.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Нарахування по пакетам відбувається 1 раз в тиждень в фіксований день, комісія за виведення грошових коштів - 2,5%.</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Регламент обробки заявки 72 години, для подачі нової заявки на виведення коштів, попередня заявка на виведення коштів повинна бути оброблена.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','proposal')}}" class="btn btn-round btn-primary ">дізнатись детальніше</a>
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
                                        <h2 class="title title-md">Умови додаткового заробітку.</h2>
                                        <p>
                                            З радістю повідомляємо, що в рамках розвитку платформи Globinc розпочала роботу вигідна програма, що дозволяє додатково заробляти за нескладні дії.</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Зніміть коротке відео в Stories Instagram і поділіться своїм досвідом інвестування в Globinc.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Напишіть статтю на своєму відвідуваному ресурсі і розкажіть в ній про переваги платформи, поділіться думкою і висловіть відгук.</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>Зніміть відео про платформу, з активним посиланнями, поділіться своїм досвідом інвестування в Globinc, розмістити відео в ютубі.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','bonus')}}" class="btn btn-round btn-primary ">дізнатись детальніше</a>
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
                            <h2 class="title title-xl" title="APP">Додатки для мобільних пристроїв</h2>
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
                                <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                    Наші додаток<br class="d-none d-md-block">для зручної роботи</h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Торги, останні новини, акції та бонуси, остання інформація по вашим надходжень і все це в вашому телефоні. З Globinc шлях до фінансової незалежності ще доступніше.</p>
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
                            <h2 class="title title-xl" title="">ПОКАЗНИКИ </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="row gutter-vr-40px justify-content-between">
                    <div class="col-xxl-6 col-xl-5 col-lg-5">
                        <div class="progress-wrap progress-wrap-point">
                            <ul class="progress-info progress-info-s2">
                                <li>ЗАЛУЧЕНО -  <span>$10,12 млн.</span></li>
                                <li class="text-right">ЦІЛЬ - <span>$150,00 млн.</span></li>
                            </ul>
                            <div class="progress-bar progress-bar-xs">
                                <div class="progress-percent progress-percent-s2" data-percent="30"></div>
                                <div class="progress-point" data-point="25">
                                    СТАРТ КОМПАНІЇ</div>
                                <div class="progress-point" data-point="55">СТАЛИЙ РОЗВИТОК</div>
                                <div class="progress-point" data-point="85">КРІПТО АКАДЕМІЯ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 text-center text-sm-left">
                        <div class="row justify-content-around gutter-vr-30px">
                            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-5">
                                <div class="status-info">
                                    <h6 class="title title-xxs tc-default status-title ttu">ПАРТНЕРІВ</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+3128</h3>
                                    <div class="fz-8">Приєдналося до проекту</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-7 col-xl-7">
                                <div class="status-countdown float-sm-right">
                                    <h6 class="title title-xxs tc-default status-title ttu">КЛІЄНТІВ</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+13890</h3>
                                    <div class="fz-8">Приєдналося до проекту</div>
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
                            <h2 class="title title-xl" title="GLOBAL GIVING">БЛАГОДІЙНІСТЬ</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;"><span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> - робимо життя кращим</p>
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
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Фонд захисту дітей" data-title="Фонд захисту дітей" data-subtitle="(более $1 млн.)" data-amount="45"></li>
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Підтримка людей з обмеженими можливостями" data-title="Підтримка людей з обмеженими можливостями" data-subtitle="($0.52 млн.)" data-amount="25"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Боротьба зі зміною клімату" data-title="Боротьба зі зміною клімату" data-subtitle="(0.16 млн.)" data-amount="8"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Захист навколишнього середовища і землі" data-title="Захист навколишнього середовища і землі" data-subtitle="(0.25 млн.)" data-amount="12"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Зупинити насильство по відношенню до жінок" data-title="Зупинити насильство по відношенню до жінок" data-subtitle="(0.12 млн.)" data-amount="6"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="Боротьба з COVID-19 в світі" data-title="Боротьба з COVID-19 в світі" data-subtitle="(0.08 млн.)" data-amount="4"></li>
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
                                                <img src="{{asset('../images/start3.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=M7giO8--jpE" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item pb-3">
                                        <div class="row justify-content-center gutter-vr-30px">
                                            <div class="nk-block-video tc-light">
                                                <img src="{{asset('../images/video/a2.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=1OXysoAe_w4" class="nk-block-video-play video-popup btn-play btn-play-s3">
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
                                <h2 class="title" title="NEWS">НОВИНИ</h2>
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
                            <p>Нижче наведені найбільш поширені питання. Якщо у вас є інші питання, зв'яжіться з нами</p>
                        </div>
                    </div>
                </div>
                <!-- Block @s -->
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="nav tab-nav tab-nav-btn tab-nav-btn-bdr tab-nav-center pdb-r">
                                <li><a class="active" data-toggle="tab" href="#tab-2-1">ДОСТУП ДО АКАУНТА</a></li>
                                <li><a data-toggle="tab" href="#tab-2-2">ФІНАНСОВІ ОПЕРАЦІЇ</a></li>
                                <li><a data-toggle="tab" href="#tab-2-4">ПРО ПРОЕКТ</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-2-1">
                                    <div class="accordion" id="acc-1">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-1-1">Як зареєструвати аккаунт? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-1" class="collapse show" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>Що б зареєструвати аккаунт необхідно натиснути кнопку «реєстрація», розташовану у верхньому правому кутку на сайті і заповнити форму реєстрації, вказавши свої дані.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-2">Забули логін / пароль? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-2" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>У разі якщо забули логін і пароль, то їх можна відновити через відповідну кнопку на сторінці авторизації в особистий кабінет. Посилання на відновлення прийде на адресу електронної пошти, вказану при реєстрації.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-3">Виникли проблеми зі входом в обліковий запис? <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-3" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>При виникненні проблем, на які ви не змогли знайти відповідь в даному розділі, необхідно написати на адресу електронної пошти Сапорта.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-2">
                                    <div class="accordion" id="acc-2">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-2-1">Час обробки заявки на виведення коштів? <span class="accordion-icon"></span></h5>
                                            <div id="acc-2-1" class="collapse show" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Виконання заявки на виведення грошових коштів на гаманці клієнтів відбувається в автоматичному режимі моментально, проте для непередбачених ситуацій компанія залишає собі 72 години на виконання заявки.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-2">Комісія компанії?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-2" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Єдина комісія, яку стягує компанія є комісією на виведення грошових коштів в розмірі 2,5 відсотка від суми виводу в доларах, вона розраховується автоматично і списується з суми виведення.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-3">Мінімальна сума виводу?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-3" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Мінімальною сумою для виведення є 50 доларів США.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-4">Як вивести кошти?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-4" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Заявку на виведення грошових коштів можна залишити натиснувши кнопку "вивести" в розділі «в особистому кабінеті, при цьому необхідно буде вказати номер свого крипто гаманця в платіжній системі.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-5">Як купити криптовалюта?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-5" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>В даний час в світі існує безліч варіантів як придбати кріптовалюту, наприклад через популярні платіжні системи Пейєра, або крипто біржі. Якщо вам важко освоїти онлайн способи покупки крипто валюти то можна скористатися обмінними пунктами. Крім того, в системі передбачена функція внутрішнього перекладу, тому ви можете поповнити баланс через «платіжного агента» (клієнта з поповненим балансом, який зможе вам зі свого рахунку поповнити баланс ».

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-6">Процес депозиту і виведення?<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-6" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>Для поповнення свого балансу, в першу чергу треба зареєструватися в особистому кабінеті, ознайомитися з договором оферти, і потвердеть згоду з ним, після чого пройти в розділ «рахунки», вибрати там підрозділ «бонусний рахунок». В даному розділі необхідно згенерувати свій особистої номер крипто гаманця, на який ви зможете відправити відповідну крипто валюту. По приходу крипто валюти на даний гаманець, баланс автоматично поповнюється відповідно до ринкового курсу. Поповнюваний рахунок не є торговим, тому треба здійснити переклад на торговий рахунок надійшли грошові кошти.
                                                        Для виведення необхідно в розділі «бонусний рахунок» натиснути кнопку висновок і вказати номер свого крипто гаманця.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-4">
                                    <div class="accordion" id="acc-4">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-4-1">Як платформа заробляє гроші?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-1" class="collapse show" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Це напевно найважливіше питання. Компанія заробляє гроші на різниці вартості кріптовалют на світовому ринку, використовуючи власні технологічні розробки в області штучного інтелекту, машинного навчання, сполученого з використанням поведінкового аналізу трейдерів і постійного моніторингу соціальних мереж осіб, які формують думку людей. В даний час, наша компанія здійснює патентування даної технології, для використання її в хедж фондах.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-2">Якщо компанія така успішна на ринку торгівлі крипто валютами, то навіщо вам залучені кошти?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-2" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Наша торгова система працює в певних умовах за певної стратегії, і її ефективність безпосередньо залежить від обсягу суми яка бере участь в операціях. Крім того великі лоти угод дозволяють маніпулювати ринком при невеликому обсязі торгових операцій на біржі. І що не менш важливо, при здійсненні торгових операцій ми не використовуємо кредитне плече, що дозволяє нам уникнути істотних ризиків і дозволяє хеджувати наші позиції.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-3">Чому ваша компанія торгує саме кріптовалютами?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-3" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Останнім часом ринок кріптовалют сильно виріс, його капіталізація перевищила $ 2 трлн, передові американські інвест будинки створили підрозділи з торгівлі кріптовалютами такі як JP Morgan Chase, Goldman Sacks, Bank of America, популярність біткіона привела до його використання такими платіжними системами, як Pay Pall, автовиробник тесла, став приймати біткоіни в якості оплати за автомобілі. Легалізація крипто валют у всьому світі підвищує ліквідність ринку кріптовалют і дозволяє торгувати великими обсягами і отримувати більший профіт.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-4">AI торгує тільки біткоінами?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-4" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Ні, торгівля здійснюється будь-яким кріптоактивом в залежності від ринкової кон'юнктури.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-5">Якщо AI такий розумний, то чому ви не торгуєте на фондовому ринку, де ліквідність ринку максимальна і немає проблем в позикових коштах?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-5" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Для того що б наша торгова стратегія працювала коректно, нам потрібна велика волатильність ціни активу, на фондовому ринку це рідкість. Крім того, у акцій є додаткові точки невизначеності ціни, наприклад вихід звітності або економічні непередбачувані фактори, як і політичні рішення щодо компаній. У кіиптовалют всього цього немає, що дозволяє нам більш стабільно здійснювати торгові операції з прогнозованим результатом.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-6">На якому ринку кріптовалют ви торгуєте? <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-6" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Краса кріптовалют в тому, що люди не прив'язані до певного майданчику і можуть в лічені хвилини перекидати активи з однієї торгової площадки на іншу, якщо того вимагає торгова ситуація. Але тим не менше ми співпрацюємо з 12 основними торговими майданчиками і постачальниками ліквідності угод такими як: Binance, Binance Futures, Currency.com, EXMO, Payeer Exchange, ByBit, Bitmex, Cex.io, Free2ex, Huobi, FTX, OKEx.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-7">Чому ви приймаєте гроші і виводите тільки в криптовалюті. А не використовуєте платіжні системи?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-7" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>
                                                        Тут все дуже легко, всі платіжні системи мають безліч обмежень для різних країн, зокрема для транскордонних платежів, крім того платіжні системи можуть самостійно блокувати користувачів і диктувати свої умови. Таких обмежень немає у кріптовалют, це справжня свобода. Як свобода волі, що ти робиш зі своїми активами так і свобода переказів. При цьому, ми як  компанія яка береже грошв, не хочемо віддавати ваші і наші гроші за облуживание платіжних систем.
                                                        Ви напевно не знали що платіжні системи беруть за транзакції по 4 відсотки, і за введення і виведення іноді відсотки доходять до 10. Ми звичайно можемо впровадити такі рішення, але тільки за ваш рахунок. Ми думаємо, що нікому це не цікаво, тому що ми за профіт і максимально оптимізуємо всі бізнес процеси.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-8">Де знаходиться головний офіс компанії?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-8" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>Наша компанія не має головний офісів, так як пандемія показала безпідставність даного бізнес рішення, на період локдаунов наша компанія роз'їхалася буквально по всіх частинах світу, програмісти працюють країнах СНД і Європи, фахівці з штучного інтелекту проживають в Нью Йорку і Лос Анджелесі, маркетологи і дизайнери облюбували теплі творчі країни і ми заохочуємо це. Наша команда в істину багатонаціональна і конфесійна і ми пишаємося цим, так як наша компанія це міжнаціональний проект фінансової свободи для всіх.</p>
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
