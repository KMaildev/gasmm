<header class="main-header-two">
    <div class="main-header-two__top">
        <div class="main-header-two__top-inner">

            <ul class="list-unstyled main-header-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">
                        <p>
                            @if (session('key') == 'jp')
                                ミャンマー
                            @elseif (session('key') == 'mm')
                                မြန်မာနံပါတ်:
                            @else
                                Myanmar:
                            @endif
                            +95(9)445652455

                            /

                            @if (session('key') == 'jp')
                                日本：
                            @elseif (session('key') == 'mm')
                                Japan:
                            @else
                                Japan:
                            @endif
                            +819032316684
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-envelope"></i>
                    </div>
                    <div class="text">
                        <p>
                            <a href="mailto:info@gas-mm.com">
                                info@gas-mm.com
                            </a>
                        </p>
                    </div>
                </li>
            </ul>

            <div class="main-header-two__top-social-box">
                <p class="main-header-two__top-social-title">Follow us:</p>
                <div class="main-header-two__top-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">

                    <div class="main-menu-two__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/company/logo.png') }}" alt="">
                        </a>
                    </div>

                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                        <ul class="main-menu__list">

                            <li>
                                <a href="{{ route('home') }}">
                                    @if (session('key') == 'jp')
                                        ホーム
                                    @elseif (session('key') == 'mm')
                                        ပင်မစာမျက်နှာ
                                    @else
                                        Home
                                    @endif
                                    <span class="main-menu-border"></span>
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
                                <span class="main-menu-border"></span>
                            </li>


                            <li class="dropdown">
                                <a href="#">
                                    @if (session('key') == 'jp')
                                        パートナー
                                    @elseif (session('key') == 'mm')
                                        Partners
                                    @else
                                        Partners
                                    @endif
                                </a>
                                <ul style="min-width: 360px;">
                                    <li>
                                        <a href="https://goodspeed-group.co.jp/" target="_blank">
                                            <img src="{{ asset('data/gs_logo.png') }}" alt=""
                                                style="width: 60px; height: 40px; background-size: center; object-fit: contain;">
                                            Good Speed Group
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://gsjmbridge-mm.com/" target="_blank">
                                            <img src="{{ asset('data/gsjm.jpg') }}" alt=""
                                                style="width: 70px; height: 40px; background-size: center; object-fit: cover;">
                                            GSJM自動車整備研修センター
                                        </a>
                                    </li>
                                </ul>
                                <span class="main-menu-border"></span>
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
                                    <span class="main-menu-border"></span>
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
                                    <span class="main-menu-border"></span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('news.index') }}">
                                    @if (session('key') == 'jp')
                                        ニュース
                                    @elseif (session('key') == 'mm')
                                        သတင်း
                                    @else
                                        News
                                    @endif
                                    <span class="main-menu-border"></span>
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
                                    <span class="main-menu-border"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
</div>
