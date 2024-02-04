@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url(https://www.indochinavoyages.com/wp-content/uploads/2015/02/A-day-venture-out-at-Bagan-1-day_banner.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="text-white">
                    @if (session('key') == 'jp')
                        ミャンマーとは？
                    @elseif (session('key') == 'mm')
                        ミャンマーとは？
                    @else
                        What is Myanmar?
                    @endif
                </h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li>
                            <a href="{{ route('home') }}">
                                @if (session('key') == 'jp')
                                    ホーム
                                @elseif (session('key') == 'mm')
                                    ပင်မစာမျက်နှာ
                                @else
                                    Home
                                @endif
                            </a>
                        </li>
                        <li><span>-</span></li>
                        <li>
                            @if (session('key') == 'jp')
                                ミャンマー連邦共和国
                            @elseif (session('key') == 'mm')
                                ミャンマー連邦共和国
                            @else
                                Republic of the Union of Myanmar
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="about-one py-5">
        <div class="about-one__shape-3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('data/mm.jpg') }}" alt="" style="width: 100%;">
                </div>

                <div class="col-md-6">

                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">
                                ABOUT OF
                            </p>
                        </div>
                        <h2 class="section-title__title">
                            ミャンマー連邦共和国
                        </h2>
                    </div>

                    <ul class="about-one__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fas fa-check-circle"></span>
                            </div>
                            <p>
                                総人口：5,457万人 (2023年9月）
                            </p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-check-circle"></span>
                            </div>
                            <p>
                                国土　：68万平方キロメートル
                            </p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-check-circle"></span>
                            </div>
                            <p>
                                民族　：ビルマ族（約70％、その他多くの少数民族）
                            </p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="fas fa-check-circle"></span>
                            </div>
                            <p>
                                宗教　：仏教（90％）、キリスト教、回教等
                            </p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="fas fa-check-circle"></span>
                            </div>
                            <p>
                                一人当たりのGDPは推定1,278ドル（約13.5万円）です。日本は44,246ドル（約470万円）なので日本のおよそ34分の1ということになります。
                            </p>
                        </li>

                    </ul>

                    <div class="about-one__text-box">
                        <div class="about-one__text-box-shape">
                            <img src="assets/images/shapes/about-one-text-box-shape.png" alt="">
                        </div>
                        <div class="about-one__text-box-icon">
                            <span class="icon-file-1"></span>
                        </div>
                        <p class="about-one__text-box-text">
                            ミャンマーは同じアジアですが、日本からは遠い所にあります。日本へは約８時間、ミャンマーへは約６時間かかります。 成田国際空港から直行便に乗ることも可能です。
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="video-one">
        <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(https://myanmar.gov.mm/documents/20143/0/festival.png/18bad609-be56-86c1-42bd-e11267959f48?t=1659424055118);">
        </div>
        <div class="video-one__shape-1">
            <img src="assets/images/shapes/video-one__shape-1.png" alt="">
        </div>
        <div class="video-one__shape-2">
            <img src="assets/images/shapes/video-one__shape-2.png" alt="">
        </div>
        <div class="video-one__shape-3">
            <img src="assets/images/shapes/video-one__shape-3.png" alt="">
        </div>
        <div class="video-one__shape-4">
            <img src="assets/images/shapes/video-one__shape-4.png" alt="">
        </div>
        <div class="video-one__shape-5">
            <img src="assets/images/shapes/video-one__shape-5.png" alt="">
        </div>

        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__icon-box">
                    <a href="https://www.youtube.com/watch?v=aIQvj-l5W2s" class="video-one__icon video-popup">
                        <span class="icon-play-2"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <ul class="counter-one__count-list list-unstyled">

                    <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__icon">
                            <span class="icon-insurance"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="676579" data-speed="1500">00</h3>
                            <span>㎢</span>
                        </div>
                        <p class="counter-one__text">
                            Area
                        </p>
                    </li>

                    <li class="wow fadeInLeft" data-wow-delay="300ms">


                        <div class="counter-one__icon">
                            <span class="icon-team"></span>
                        </div>

                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="57526449" data-speed="1500">00</h3>
                            <span>
                            </span>
                        </div>
                        <p class="counter-one__text">
                            Population (2022 estimate)
                        </p>
                    </li>

                    <li class="wow fadeInRight" data-wow-delay="600ms">
                        <div class="counter-one__icon">
                            <span class="icon-rating"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="277.767" data-speed="1500">00</h3>
                            <span>billion</span>
                        </div>
                        <p class="counter-one__text">
                            Gross domestic product (2023 estimate)
                        </p>
                    </li>


                </ul>
            </div>
        </div>
    </section>


    @include('components.mm_group')

    <section class="faq-page">
        <div class="container">
            <div class="faq-page__text-box">
                <div class="faq-page__text-box-shape-1">
                    <img src="{{ asset('assets/images/shapes/faq-page-text-box-shape-1.png') }}" alt="">
                </div>
                <div class="section-title text-left">
                    <h2 class="section-title__title">
                        なぜミャンマーなのか？
                    </h2>

                    <p class="text-black" style="font-size: 19px;">
                        ミャンマー人は日本との親和性が高い最も好ましい人材と言えます。高い就労意欲を持つことや国民の90%が仏教徒であること、また識字率の高さから教育水準が相対的に高い若年層の人材が多いことから、今後の成長が見込まれる「ラストフロンティア」として注目されています。

                        <br>

                        国民の90%が敬虔な仏教徒であることや高い就労意欲を持つことなど、ミャンマー人は日本人に近い国民性を持っています。また識字率の高さや日本語の上達スピードの速さなど、高い教育水準を持った優秀な若者が多いのですが、良い仕事に就けるチャンスが少なく、日本で働きたいという意欲を強く持っています。
                    </p>

                </div>
            </div>
        </div>
    </section>


    @include('components.mm_gallery')

@endsection
