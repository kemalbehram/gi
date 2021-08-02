@extends('layouts.appcn')
@section('title', 'Globinc - Passive income on the crypto exchange.')
@section('meta', 'Passive income✔ making money on the Internet ✔ buy bitcoin ✔ everything about the crypto exchange - Globinc, your way to success.')
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
                                <h3 class="title title-xl title-glob" title="TO THE FUTURE" style="padding-bottom: 10px;"> 成功之道！</h3>
                            </div>
                            <p class="lead" style="font-size: 1.3rem; color: #dabd75;">使用公司在人工智能领域的技术发展  <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> 从世界市场上加密货币的价值差异中获利</p>
                            <div class="cpn-action" >
                                <a class="btn btn-primary btn-round " href="https://my.globinc.com/auth/register" style="font-size:15px; margin-bottom: 10px;">注册</a>
                            </div>
                            <h3 class="title title-xl title-glob" title="В БУДУЩЕЕ" style=" ">每月利润 是<span  style="font-weight: 900; color: #dabd75; font-size: 59px; ">  30%</span></h3>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="status-countdown float-sm-right">
                        <h6 class="title title-xxs tc-default status-title ttu" style="text-align: center !important;">Starting the project wery soon</h6>
                        <div class="countdown justify-content-center justify-content-sm-start countdown-s3 countdown-s3-alt" data-date="2021/08/05" data-day-text="Days" data-Hours-text="Hours" data-min-text="Minutes" data-sec-text="Seconds"></div>
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
                                资费套餐</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">与我们一起投资。  <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> 这是您成功和财务自由的机会</p>
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
                                        <h6>最低金额 <span  class="token-stage-bonus">$151</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>最高金额 <span  class="token-stage-bonus">$999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>每天利润是 <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>工作期限 <span  class="token-stage-bonus">365 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>总和提取是 <span  class="token-stage-bonus">70%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>自动投资是 <span  class="token-stage-bonus">30%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>期末退还押金<span  class="token-stage-bonus">  没有</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>第一次付款 <span  class="token-stage-bonus">18 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">投资</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s3.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL BUSINESS</div>
                                    <div class="token-stage-date">
                                        <h6>最低金额 <span  class="token-stage-bonus">$1000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>最高金额 <span  class="token-stage-bonus">$4999</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>每天利润是 <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>工作期限 <span  class="token-stage-bonus">365 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>总和提取是 <span  class="token-stage-bonus">80%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>自动投资是 <span  class="token-stage-bonus">20%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>期末退还押金 <span  class="token-stage-bonus"> 没有</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>第一次付款 <span  class="token-stage-bonus">12 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">投资</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="token-stage text-center bg-primery">
                                    <img class="shadow rounded" src="{{asset('../images/s2.png')}}" alt="" style="width: 100%;">
                                    <div class="token-stage-title token-stage-pre" style="color:#000">GLOBAL VIP</div>
                                    <div class="token-stage-date">
                                        <h6>最低金额 <span  class="token-stage-bonus">$5000</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>最高金额 <span  class="token-stage-bonus">unlimited</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>每天利润是 <span  class="token-stage-bonus">1%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>工作期限 <span  class="token-stage-bonus">365 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>总和提取是 <span  class="token-stage-bonus">90%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>自动投资是 <span  class="token-stage-bonus">10%</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>期末退还押金 <span  class="token-stage-bonus"> 没有</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <h6>第一次付款 <span  class="token-stage-bonus">8 天</span></h6>
                                    </div>
                                    <div class="token-stage-date">
                                        <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">投资</a>
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
                            <h2 class="title title-xl" title="Result">计算器 </h2>
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
                                    <h3 class="mt-apc__title">联盟计划条件</h3>
                                    <div class="mt-apc__list">
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">资费套餐
                                            </div>
                                            <div class="mt-apc__li-v" data-profit-calc="direct_bonus" id="packages">Global Start</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">第一次付款</div>
                                            <div class="mt-apc__li-v" data-profit-calc="binary_bonus"><span  id="beginningOfWork">18</span>天</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">提款金额</div>
                                            <div class="mt-apc__li-v" id="sumToWithdraw">70%</div>
                                        </div>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k">最低金额</div>
                                            <div class="mt-apc__li-v" id="minimumSum">$151</div>
                                        </div>
                                        <br>
                                        <div class="mt-apc__li">
                                            <div class="mt-apc__li-k" style="font-weight: bold; font-size: 20px!important;">
                                                365 天的总结果 </div>
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
                                                <div class="c-profit-calc-kv__k"><br>投资额</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-lg-6 mt-6">
                                        <div class="c-profit-calc__result c-profit-calc__result--eq">
                                            <div class="c-profit-calc-kv has-active-bg-color">
                                                <div class="c-profit-calc-kv__v" data-profit-calc="total_profit">$<span id="sum2">1</span></div>
                                                <div class="c-profit-calc-kv__k">利润  <br> +1% 一天</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-profit-calc__actions">
                            <a href="https://my.globinc.com/order/main" class="btn btn-round btn-primary ">投资</a>
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
                            <h2 class="title title-xl" title="AI">这个怎么运作？ </h2>
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
                                    使用  <span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span>的说明</h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">要参与该项目，用户必须在他的个人账户中注册，在那里注明他的全名、电话号码、邮政地址和推荐代码，之后需要验证邮件。</p>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">转到“帐户”部分，在那里选择“奖金帐户”子部分。在本节中，您需要生成您可以向其发送加密货币的个人加密钱包号码。</p>
                            </div><!-- .section-head @e -->
                            <div class="row gutter-vr-20px flex-wrap">
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>邮件的注册和验证。</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>充值您的余额.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>开始在加密货币市场上交易.</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-6">
                                    <div class="feature feature-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                        <div class="feature-icon feature-icon-s5 feature-icon-s5-2">
                                            <em class="icon fas fa-check"></em>
                                        </div>
                                        <div class="feature-text feature-text-s1">
                                            <p>从账户中提取资金。</p>
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
                            <h2 class="title title-xl" title="Conditions">合作伙伴计划</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;">
                                由于成功的推荐系统，您的职业发展现在仅取决于您的活动。</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <ul class="nav tab-nav tab-nav-btn-bdr-s2 justify-content-center justify-content-sm-between pb-4 pb-sm-5">
                                <li><a class="active" data-toggle="tab" href="#tab-1-1">状况</a></li>
                                <li class="tab-nav-sap d-none d-sm-block"></li>
                                <li><a data-toggle="tab" href="#tab-1-2">奖金</a></li>
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
                                        <h2 class="title title-md">联盟计划条款</h2>
                                        <p>
                                            我们提供有效的工作工具，以及丰厚的奖励和职业机会奖金。</p>
                                        <div class="feature feature-inline feature-middle">
                                            <div class="feature-text">
                                                <p>购买 GLOBAL 关税套餐时，以美元当前汇率固定资金，并以 USDT 付款。</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>套餐每周固定一天入账一次，提现手续费为2.5%。</p>
                                            </div>
                                        </div>

                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>
                                                    处理申请的时限为72小时，如需提交新的提款申请，必须处理之前的提款申请。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','proposal')}}" class="btn btn-round btn-primary ">了解更多</a>
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
                                        <h2 class="title title-md">额外收入的条件.</h2>
                                        <p>我們很高興地宣布，作為 Globinc 平台開發的一部分，已經啟動了一項有利可圖的計劃，讓您可以通過簡單的操作賺取額外的收入。</p>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>在 Instagram Stories 上拍攝短片，分享您投資 Globinc 的經驗。</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>寫一篇關於您訪問過的資源的文章，並講述其中的平台優勢，分享您的意見並提供反饋。</p>
                                            </div>
                                        </div>
                                        <div class="feature feature-inline feature-middle">

                                            <div class="feature-text">
                                                <p>拍攝有關該平台的視頻，帶有活動鏈接，分享您投資 Globinc 的經驗，在 YouTube 上發布視頻。</p>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="text-center text-sm-left">
                                        <a href="{{route('page','bonus')}}" class="btn btn-round btn-primary ">了解更多</a>
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
                            <h2 class="title title-xl" title="APP">适用于移动设备的应用程序</h2>
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
                                <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">我们方便工作的应用程序<br class="d-none d-md-block"></h2>
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">交易、最新消息、促销和奖金、有关您收入的最新信息，尽在您的手机中。</p>
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
                            <h2 class="title title-xl" title="">指标 </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-xxl">
                <div class="row gutter-vr-40px justify-content-between">
                    <div class="col-xxl-6 col-xl-5 col-lg-5">
                        <div class="progress-wrap progress-wrap-point">
                            <ul class="progress-info progress-info-s2">
                                <li>吸引了 -  <span>- $10,12 million.</span></li>
                                <li class="text-right">目标 - <span> - $150,00 million.</span></li>
                            </ul>
                            <div class="progress-bar progress-bar-xs">
                                <div class="progress-percent progress-percent-s2" data-percent="30"></div>
                                <div class="progress-point" data-point="25">公司成立</div>
                                <div class="progress-point" data-point="55">可持续发展</div>
                                <div class="progress-point" data-point="85">加密学院</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 text-center text-sm-left">
                        <div class="row justify-content-around gutter-vr-30px">
                            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-5">
                                <div class="status-info">
                                    <h6 class="title title-xxs tc-default status-title ttu">伙伴</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+3128</h3>
                                    <div class="fz-8">加入了项目</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-7 col-xl-7">
                                <div class="status-countdown float-sm-right">
                                    <h6 class="title title-xxs tc-default status-title ttu">客户</h6>
                                    <h3 class="fz-3 fw-3 status-percent" style="color: #dabd75!important; font-weight: 900!important;">+13890</h3>
                                    <div class="fz-8">加入了项目</div>
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
                                慈善机构</h2>
                            <p class="lead" style="font-size: 1.4rem; color: #dabd75;"><span style="color: white; font-weight: 900;">Globinc</span><span  style="color: white; "></span> -
                                让生活更美好。</p>
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
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="儿童保护基金 " data-title="儿童保护基金 " data-subtitle="(100 万美元以上)" data-amount="45"></li>
                                <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="对残疾人的支持 " data-title="对残疾人的支持 " data-subtitle="(52 万美元)" data-amount="25"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="应对气候变化" data-title="应对气候变化" data-subtitle="(16 万美元)" data-amount="8"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="保护环境和地球  " data-title="保护环境和地球  " data-subtitle="(25 万美元)" data-amount="12"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="停止对妇女的暴力行为 " data-title="停止对妇女的暴力行为 " data-subtitle="(12 万美元)" data-amount="6"></li>
                                <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#dabd75" data-label="在全球范围内与 COVID-19 抗争 " data-title="在全球范围内与 COVID-19 抗争 " data-subtitle="(80 万美元)" data-amount="4"></li>
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
                                                <img src="{{asset('../images/start1.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=fkGEOswhMMA" class="nk-block-video-play  video-popup btn-play btn-play-s3">
                                                    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item pb-3">
                                        <div class="row justify-content-center gutter-vr-30px">
                                            <div class="nk-block-video tc-light">
                                                <img src="{{asset('../images/video/a2.png')}}" alt="video">
                                                <a href="https://www.youtube.com/watch?v=8d2V0PHHXKo" class="nk-block-video-play video-popup btn-play btn-play-s3">
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
                                <h2 class="title" title="NEWS">消息</h2>
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
                            <h2 class="title title-xl" title="FAQS">常见问题</h2>
                            <p>下面我们提供了一些 ICO、令牌、加密货币和其他一些。</p>
                        </div>
                    </div>
                </div>
                <!-- Block @s -->
                <div class="nk-block">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="nav tab-nav tab-nav-btn tab-nav-btn-bdr tab-nav-center pdb-r">
                                <li><a class="active" data-toggle="tab" href="#tab-2-1">訪問帳戶</a></li>
                                <li><a data-toggle="tab" href="#tab-2-2">財務運作</a></li>
                                <li><a data-toggle="tab" href="#tab-2-4">关于我们</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-2-1">
                                    <div class="accordion" id="acc-1">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-1-1">怎么注册帐户？<span class="accordion-icon"></span></h5>
                                            <div id="acc-1-1" class="collapse show" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        要注册帐户，您必须点击位于网站右上角的“注册”按钮并填写注册表格，注明您的资料。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-2">忘记您的用户名/密码？<span class="accordion-icon"></span></h5>
                                            <div id="acc-1-2" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        如果您忘记了用户名和密码，您可以通过个人账户授权页面上的相应按钮恢复它们。 恢复链接将发送到注册时指定的电子邮件地址。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-1-3">无法登录您的帐户？ <span class="accordion-icon"></span></h5>
                                            <div id="acc-1-3" class="collapse" data-parent="#acc-1">
                                                <div class="accordion-content">
                                                    <p>
                                                        如果您遇到在本节中找不到答案的问题，您需要写信至支持电子邮件地址。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-2">
                                    <div class="accordion" id="acc-2">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-2-1">处理提款请求需要多长时间？ <span class="accordion-icon"></span></h5>
                                            <div id="acc-2-1" class="collapse show" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>将资金提取到客户钱包的请求会立即自动执行，但是，对于不可预见的情况，公司保留 72 小时来执行申请。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-2">公司的佣金是多少？<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-2" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>公司收取的唯一佣金是提款佣金，金额为提款金额的 2.5%，以美元为单位，自动计算并从提款金额中扣除。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-3">最低提款金额是多少？<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-3" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>最低提款金额为 151 美元</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-4">我如何提取资金？<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-4" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>您可以通过点击“金融”版块或个人账户主页上的提款按钮来提出提款请求，您需要注明您的USDT钱包编号，用于付款。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-5">怎么购买加密货币？<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-5" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>目前，世界上有很多购买加密货币的选择，例如，通过流行的支付系统 Peyer 或加密货币交易所。 如果您很难掌握在线购买加密货币的方法，那么您可以使用兑换处。 此外，系统提供内部转账功能，您可以通过“支付代理”（有补充余额的客户，可以从他的账户中充值余额）为您的余额充值。

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-2-6">存款和取款流程？<span class="accordion-icon"></span></h5>
                                            <div id="acc-2-6" class="collapse" data-parent="#acc-2">
                                                <div class="accordion-content">
                                                    <p>要补充您的余额，首先您需要在您的个人账户中注册，熟悉优惠协议，并确认您同意，然后进入“账户”部分，在那里选择“奖金账户”部分。 在此部分，您需要生成您的个人加密钱包编号，您可以将相应的加密货币发送到该编号。 加密货币到达此钱包后，余额将根据市场汇率自动补充。 需要充值的账户不是交易账户，因此需要将收到的资金转入交易账户。 要提现，您需要点击“奖金账户”部分的提现按钮，并注明您的加密钱包编号。 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2-4">
                                    <div class="accordion" id="acc-4">
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#acc-4-1">是怎么赚钱的？<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-1" class="collapse show" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>这可能是最重要的问题。 该公司利用自己在人工智能、机器学习领域的技术发展，加上对交易者的行为分析和对社交网络的持续监控，从世界市场上加密货币的价值差异中赚钱。目前为了用于对冲基金,我们公司正在为这项技术申请专利。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-2">如果公司在加密货币交易市场如此成功，你为什么需要筹集资金？<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-2" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>我们的交易系统按照一定的策略在一定条件下工作，其效率直接取决于操作涉及的金额. 此外，大额交易允许您在交易所进行少量交易操作来操纵市场。重要的是，我们在执行交易操作时不使用杠杆，这使我们能够避免重大风险并允许我们对冲头寸。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-3">为什么贵公司交易加密货币？<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-3" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>近期，加密货币市场大幅增长，市值突破1万亿美元。美国领先的投资公司已经建立了加密货币交易部门，如摩根大通(JP Morgan Chase)、高盛(Goldman Sacks)、美国银行(Bank of America). 比特币的流行导致其被 Pay Pall 等支付系统使用. 特斯拉(Tesla)开始接受比特币作为汽车的支付方式。世界各地的加密货币合法化增加了加密货币市场的流动性，并允许您进行大量交易并获得更多利润。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-4">人工智能(AI)只交易比特币吗？  <span class="accordion-icon"></span></h5>
                                            <div id="acc-4-4" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>
                                                        不可以，根据市场情况，可以使用任何加密资产进行交易</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-5">
                                                如果人工智能这么聪明，你为什么不在股市交易，那里市场流动性最大，借来的资金没有问题?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-5" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>为了让我们的交易策略正确运行，我们需要资产价格的大幅波动，这在股市中是罕见的。此外，股票在价格方面具有额外的不确定性，例如财务报表或经济不可预测因素，或与公司有关的政治决策。加密货币没有这一切，这使我们能够更一致地以可预测的结果进行交易操作。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-6">
                                                你在哪个加密货币市场交易？<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-6" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>T加密货币的优势在于人们不受特定平台的束缚，如果交易情况需要，可以在几分钟内将资产从一个交易平台转移到另一个交易平台。
                                                        尽管如此，我们与12个主要交易平台和交易流动性提供商合作，例如：Binance, Binance Futures, Currency.com, EXMO, Payeer Exchange, ByBit, Bitmex, Cex.io, Free2ex, Huobi, FTX, OKEx.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-7">为什么您只接受货币并仅以加密货币取款？ 不使用支付系统？<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-7" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>这里一切都很简单，所有支付系统对不同国家都有很多限制，尤其是跨境支付，此外，支付系统可以独立阻止用户并规定他们的条件。加密货币没有这样的限制，这是真正的自由。同时，作为一家知道如何和数钱的公司，我们不想将您和我们的钱用于服务支付系统。您可能不知道支付系统对交易收取 4% 的费用，有时存款和取款的利息高达 10。当然，我们可以实施此类解决方案，但费用由您承担。我们认为没有人对此感兴趣，因为我们尽可能优化所有业务流程。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item accordion-item-s3">
                                            <h5 class="accordion-title accordion-title-sm collapsed" data-toggle="collapse" data-target="#acc-4-8">公司总部在哪里?<span class="accordion-icon"></span></h5>
                                            <div id="acc-4-8" class="collapse" data-parent="#acc-4">
                                                <div class="accordion-content">
                                                    <p>我们公司没有总部。 大流行表明没有必要设立办公室。 在新冠封锁间，我们公司实际上分散到了世界各地.程序员在独联体和欧洲工作，人工智能专家住在纽约和洛杉矶。我们的团队是真正的多民族.我们为此感到自豪，因为我们的公司是所有人财务自由的跨国项目。</p>
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
{{--        <section class="section" id="contact">--}}

{{--            <div class="container">--}}
{{--                <!-- Block @s -->--}}
{{--                <div class="nk-block nk-block-contact">--}}
{{--                    <div class="row justify-content-between align-items-center gutter-vr-50px">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="nk-block-text">--}}
{{--                                <div class="nk-block-text-head">--}}
{{--                                    <h2 class="title title-lg ttu">CONTACT US</h2>--}}
{{--                                    <p>We are always open and we welcome and questions you have for our team. If you wish to get in touch, please fill out the form below. Someone from our team will get back to you shortly.</p>--}}
{{--                                </div>--}}
{{--                                <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="field-item">--}}
{{--                                                <label class="field-label ttu">Your Name</label>--}}
{{--                                                <div class="field-wrap">--}}
{{--                                                    <input name="name" id="name" placeholder="Introduce yourself" type="text" class="input-bordered required">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="field-item">--}}
{{--                                                <label class="field-label ttu">Your Email</label>--}}
{{--                                                <div class="field-wrap">--}}
{{--                                                    <input name="email" id="email" placeholder="Who do we replay to" type="email" class="input-bordered required email">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="field-item">--}}
{{--                                        <label class="field-label ttu">Your Message </label>--}}
{{--                                        <div class="field-wrap">--}}
{{--                                            <textarea name="massages"  id="massages" placeholder="Leave your question or comment here" class="input-bordered input-textarea required"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <input type="text" class="d-none" name="form-anti-honeypot" value="">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-5 text-right">--}}
{{--                                            <button type="submit" class="btn btn-round btn-primary ">SEND</button>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-7 order-sm-first">--}}
{{--                                            <div class="form-results"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-5 text-center order-lg-first">--}}
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
{{--                                        "locale": "uk",--}}
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
