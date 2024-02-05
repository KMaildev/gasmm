<footer class="site-footer site-footer-two" style="margin-top: 5px;">

    <div class="site-footer__shape-1 float-bob-x">
        <img src="{{ asset('assets/images/shapes/site-footer-two-shape-1.png') }}" alt="">
    </div>
    <div class="site-footer-two__shape-2 img-bounce">
        <img src="{{ asset('assets/images/shapes/site-footer-two-shape-2.png') }}" alt="">
    </div>

    <div class="site-footer__top" style="padding-top: 20px;">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('data/company/logo1.png') }}" alt="">
                                </a>
                            </div>
                            <p class="footer-widget__about-text" style="text-align: justify;">
                                Give us a call or drop by anytime, we endeavour to answer all inquiries within 24 hours
                                on business days. We will be happy to answer your questions.
                            </p>
                            <div class="footer-widget__emergency-call">
                                @if (session('key') == 'jp')
                                    ミャンマー
                                @elseif (session('key') == 'mm')
                                    မြန်မာနံပါတ်:
                                @else
                                    Myanmar:
                                @endif
                                <a href="tel:+95(9)445652455">
                                    +95(9)445652455
                                </a>

                                <br>

                                @if (session('key') == 'jp')
                                    日本：
                                @elseif (session('key') == 'mm')
                                    Japan:
                                @else
                                    Japan:
                                @endif
                                <a href="tel:+819032316684">
                                    +819032316684
                                </a>

                                <a href="mailto:info@gas-mm.com">
                                    info@gas-mm.com
                                </a>
                            </div>
                            <div class="footer-widget__social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-instagram-1"></span></a>
                                <a href="#"><span class="icon-tik-tok"></span></a>
                                <a href="#"><span class="icon-youtube"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__navigation">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Navigation</h3>
                            </div>
                            <ul class="footer-widget__navigation-list list-unstyled">
                                <li>
                                    <a href="index.html">
                                        @if (session('key') == 'jp')
                                            ホーム
                                        @elseif (session('key') == 'mm')
                                            ပင်မစာမျက်နှာ
                                        @else
                                            Home
                                        @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about.index') }}">
                                        @if (session('key') == 'jp')
                                            会社概要
                                        @elseif (session('key') == 'mm')
                                            ကုမ္ပဏီအကြောင်း
                                        @else
                                            About Us
                                        @endif
                                    </a>
                                </li>




                                <li>
                                    <a href="{{ route('myanmar.index') }}">
                                        @if (session('key') == 'jp')
                                            ミャンマーとは？
                                        @elseif (session('key') == 'mm')
                                            ミャンマーとは？
                                        @else
                                            What is Myanmar?
                                        @endif
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('recruitment_flow.index') }}">
                                        @if (session('key') == 'jp')
                                            求人の流れ
                                        @elseif (session('key') == 'mm')
                                            Recruitment flow
                                        @else
                                            Recruitment flow
                                        @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('activities.index') }}">
                                        @if (session('key') == 'jp')
                                            ギャラリー
                                        @elseif (session('key') == 'mm')
                                            ဓာတ်ပုံများ
                                        @else
                                            Gallery
                                        @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        @if (session('key') == 'jp')
                                            お問い合わせ
                                        @elseif (session('key') == 'mm')
                                            ဆက်သွယ်ရန်
                                        @else
                                            Contact
                                        @endif
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__quick-link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">
                                    @if (session('key') == 'jp')
                                        パートナー
                                    @elseif (session('key') == 'mm')
                                        Partners
                                    @else
                                        Partners
                                    @endif
                                </h3>
                            </div>
                            <ul class="footer-widget__navigation-list list-unstyled">
                                <li>
                                    <a href="https://goodspeed-group.co.jp/" target="_blank">
                                        Good Speed Group
                                    </a>
                                </li>

                                <li>
                                    <a href="https://gsjmbridge-mm.com/" target="_blank">
                                        GSJM自動車整備研修センター
                                    </a>
                                </li>
                            </ul>

                            <br><br>
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">
                                    @if (session('key') == 'jp')
                                        Site visitor
                                    @elseif (session('key') == 'mm')
                                        Site visitor
                                    @else
                                        Site visitor
                                    @endif
                                </h3>
                            </div>

                            <p style="color: white">
                                Total Visitors: {{ number_format($totalCount) }} <br>
                                Today: {{ number_format($todayCount) }} <br>
                                This Week: {{ number_format($ThisWeek) }} <br>
                                This Month: {{ number_format($currentMonthCount) }}<br>
                                This Year: {{ number_format($currentYearCount) }} <br>
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__newsletter">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">
                                    Facebook
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">
                    Copyright © 2024 ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED). All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
