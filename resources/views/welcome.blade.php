@extends('layouts.main')
@section('content')
    @include('layouts.slider')

    <section class="feature-one">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="feature-one__single">
                        <div class="feature-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-shape-1.png') }});">
                        </div>
                        <div class="feature-one__hover-shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-hover-shape-1.png') }});">
                        </div>
                        <div class="feature-one__icon">
                            <span class="icon-protection"></span>
                        </div>
                        <div class="feature-one__content">
                            <p class="feature-one__sub-title">
                                @if (session('key') == 'jp')
                                    海外雇用サービス <br>
                                    代理店が専門家の指導を提供 <br>
                                    海外で仕事を見つけるために。
                                @elseif (session('key') == 'mm')
                                @else
                                    Overseas Employment Service <br> Agencies provide expert guidance <br> for finding jobs
                                    abroad.
                                @endif
                            </p>
                            <br>
                            <h3 class="feature-one__title">
                                Expert guidance
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-one__single">
                        <div class="feature-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-shape-1.png') }});">
                        </div>
                        <div class="feature-one__hover-shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-hover-shape-1.png') }});">
                        </div>
                        <div class="feature-one__icon">
                            <span class="icon-investment"></span>
                        </div>
                        <div class="feature-one__content">
                            <p class="feature-one__sub-title">
                                @if (session('key') == 'jp')
                                    彼らは雇用主との広範なネットワークを 持っており、 <br> あなたの就職の可能性を 高めます。
                                @elseif (session('key') == 'mm')
                                @else
                                    They have extensive networks <br> with employers, enhancing <br> your job prospects.
                                @endif
                            </p>
                            <br>
                            <h3 class="feature-one__title">
                                Job connections
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms">
                    <div class="feature-one__single">
                        <div class="feature-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-shape-1.png') }});">
                        </div>
                        <div class="feature-one__hover-shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/feature-one-hover-shape-1.png') }});">
                        </div>
                        <div class="feature-one__icon">
                            <span class="icon-risk-management"></span>
                        </div>
                        <div class="feature-one__content">
                            <p class="feature-one__sub-title">
                                @if (session('key') == 'jp')
                                    これらの機関は申請プロセスを簡素 <br> 化し、 簡単に申請できるようにしま <br> す。
                                    ナビゲートする ビザ、ドキュメントとインタビュー。
                                @elseif (session('key') == 'mm')
                                @else
                                    These agencies simplify the <br> application process, making it <br> easier for you to
                                    navigate
                                    visas, <br>
                                    documentation, and interviews.
                                @endif
                            </p>
                            <h3 class="feature-one__title">
                                Streamlined process
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-two py-5">
        <div class="about-two_-shape-3 img-bounce">
            <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{ asset('data/building.jpg') }}" alt="">
                            </div>
                            <div class="about-two__img-2">
                                <img src="{{ asset('data/32.jpg') }}" alt="" style="width: 300px;">
                            </div>

                            <div class="about-two__client-box">
                                <div class="about-two__client-img">
                                    <img src="{{ asset('data/company/logo1.png') }}" alt="">
                                </div>
                                <div class="about-two__client-content">
                                    <div class="about-two__count count-box">
                                        <span>GAS</span>
                                    </div>
                                    <p>
                                        Since 2015
                                    </p>
                                </div>
                            </div>
                            <div class="about-two__shape-1"></div>
                            <div class="about-two__shape-2 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/about-two-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline">
                                    @if (session('key') == 'jp')
                                        会社概要
                                    @elseif (session('key') == 'mm')
                                        ကုမ္ပဏီအကြောင်း
                                    @else
                                        About Us
                                    @endif
                                </p>
                            </div>
                            <h2 class="section-title__title" style="font-size: 30px; color: #303A9C; font-weight: bold;">
                                ジーエーエス　カンパニーリミテッド
                            </h2>
                        </div>
                        <p class="about-two__text" style="color: black">
                            ミャンマーは情勢不安により国内の仕事がなく、ミャンマーの多くの若者は海外での働き先を探しています。そして高齢化・人材不足に悩む日本。両国の問題を解決をする為、GASは両国の架け橋となりたいという強い想いがあります。
                            <br><br>
                            しかし、ミャンマーの若者にとって母国と異なる言葉・文化・習慣がある日本社会で働くことは簡単ではありません。
                            一方、受け入れ企業様にもミャンマー人材に関して言葉や文化の違いにより、日本での生活は大丈夫なのかと言う様々なご懸念があることでしょう。
                            <br><br>
                            そうしたお互いの様々な悩みを解決する為、GASは語学はもちろん、生活教育にも力を入れ、日本社会に通用する人材を育て送り出します。
                            <br><br>
                            「悩みを解消し、共に成長を目指す送り出し機関GAS」
                            <br><br>
                            を経営理念に、GASの全ての関係者様を全力でサポートしていきます。
                        </p>
                        <br>
                        <h3 class="about-two__big-text" style="font-size: 15px;">
                            G A S COMPANY LIMITED is the leading Manpower Recruiting Agency based in Myanmar, licensed and
                            authorized
                            by the Ministry of Labor, Employment and Social Security of Myanmar.
                        </h3>

                        <div class="about-two__btn-and-contact">
                            <div class="about-two__btn-box">
                                <a href="{{ route('about.index') }}" class="about-two__btn thm-btn">
                                    Read More
                                </a>
                            </div>

                            <div class="about-two__contact">
                                <div class="icon">
                                    <span>
                                        <i class="fa-brands fa-viber"></i>
                                    </span>
                                </div>
                                <div class="content">
                                    <span>Click to Send Viber</span>
                                    <p>
                                        <a href="viber://chat?number=+95(9)445652455">
                                            +95(9)445652455
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="counter-one">
        <div class="counter-one__shape-1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-1.png') }}" alt="">
        </div>
        <div class="counter-one__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-2.png') }}" alt="">
        </div>
        <div class="counter-one__shape-3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-3.png') }}" alt="">
        </div>
        <div class="counter-one__shape-4 float-bob-y">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-4.png') }}" alt="">
        </div>
        <div class="counter-one__shape-5 img-bounce">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-5.png') }}" alt="">
        </div>
        <div class="counter-one__shape-6 float-bob-y">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-6.png') }}" alt="">
        </div>
        <div class="counter-one__shape-7 float-bob-x">
            <img src="{{ asset('assets/images/shapes/counter-one-shape-7.png') }}" alt="">
        </div>
        <div class="container">
            <div class="counter-one__inner">
                <ul class="counter-one__count-list list-unstyled">

                    <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__icon">
                            <span class="icon-team"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="250" data-speed="1500">00</h3>
                            <span>+</span>
                        </div>
                        <p class="counter-one__text">
                            Sending Workers
                        </p>
                    </li>

                    <li class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__icon">
                            <span class="icon-insurance"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="4" data-speed="1500">00</h3>
                            <span>+</span>
                        </div>
                        <p class="counter-one__text">
                            Sending Countries
                        </p>
                    </li>

                    <li class="wow fadeInDown" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <span class="icon-rating"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="200" data-speed="1500">00</h3>
                            <span>+</span>
                        </div>
                        <p class="counter-one__text">
                            Our Global Partners
                        </p>
                    </li>

                    <li class="wow fadeInRight" data-wow-delay="400ms">
                        <div class="counter-one__icon">
                            <span class="icon-team"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                            <span>+</span>
                        </div>
                        <p class="counter-one__text">
                            Year of Experience
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <section class="services-two">
        <div class="services-two__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/services-two-shape-2.png') }}" alt="">
        </div>
        <div class="services-two__shape-3">
            <img src="{{ asset('assets/images/shapes/services-two-shape-3.png') }}" alt="">
        </div>
        <div class="services-two__shape-4">
            <img src="{{ asset('assets/images/shapes/services-two-shape-4.png') }}" alt="">
        </div>
        <div class="services-two__top">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline">
                            ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                        </p>
                    </div>
                    <h2 class="section-title__title">
                        会社概要
                    </h2>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="services-two__inner">
                            <style>
                                .table {
                                    border-collapse: collapse;
                                    border: 1px solid black;
                                    width: 100%;
                                }

                                th,
                                td {
                                    border: 1px solid rgb(201, 199, 199);
                                }
                            </style>

                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td width="15%" style="background-color: #002060; color: white;">
                                            会社名
                                        </td>

                                        <td colspan="3" style="background-color: #002060; color: white;">
                                            ジーエーエス カンパニーリミテッド (GAS COMPANY LIMITED)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3" style="background-color: #002060; color: white;">
                                            経営陣
                                        </td>

                                        <td
                                            style="width: 30%; text-align: center; background-color: #cfd5e9; color: black;">
                                            役職・氏名
                                        </td>

                                        <td
                                            style="width: 30%; text-align: center; background-color: #cfd5e9; color: black;">
                                        </td>

                                        <td
                                            style="width: 30%; text-align: center; background-color: #cfd5e9; color: black;">
                                            略歴
                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="background-color: #e8ebf4;">
                                            代表
                                            <br>
                                            SAN YADANAR AUNG
                                            <br>
                                            サン ヤダナ アウン
                                        </td>

                                        <td style="background-color: #e8ebf4;">
                                            2015年GAS 設立
                                            <br>
                                            (国内人材事業経営)
                                        </td>

                                        <td style="background-color: #e8ebf4;">
                                            代表
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #CFD5E9;">
                                            CEO
                                            <br>
                                            WAI LIN MAUNG
                                            <br>
                                            ウェイ リン マウン
                                        </td>

                                        <td style="background-color: #CFD5E9;">
                                            G A S (海外人材送り出し事業経営） <br>
                                            HEIWA Training Centre (教育機関） <br>
                                            GSJM BRIDGE自動車整備研修センター <br>
                                            GSJM BRIDGE CO.,LTD
                                        </td>

                                        <td style="background-color: #CFD5E9;">
                                            CEO <br>
                                            センター長 <br>
                                            センター長 <br>
                                            取締役 <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            創立
                                        </td>

                                        <td style="background-color: #E8EBF4;">
                                            2015年1月16日
                                        </td>

                                        <td colspan="2" style="background-color: #E8EBF4;">
                                            登記簿謄本番号：108499060
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            資本金
                                        </td>

                                        <td colspan="3" style="background-color: #CFD5E9;">
                                            MMK 10,000,000
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            従業員
                                        </td>

                                        <td colspan="3" style="background-color: #E8EBF4;">
                                            16名（管理本部　責任者：PHYO WIN MYINT ）
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            所在地
                                        </td>

                                        <td colspan="3" style="background-color: #CFD5E9;">
                                            NO 19/130, YADANARBONE KYAUNG STREET, MAYANGONE TOWNSHIP, YANGON REGION, MYANMAR
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            連絡先
                                        </td>

                                        <td colspan="3" style="background-color: #E8EBF4;">
                                            ミャンマー：+95(9)445652455　 / 　日本：+819032316684
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            授業内容
                                        </td>

                                        <td colspan="3" style="background-color: #CFD5E9;">
                                            ミャンマー人材の送り出し機関業務全般・日本語教育研修センター
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            送り出し許可番号
                                        </td>

                                        <td colspan="3" style="background-color: #E8EBF4;">
                                            200/2023 ミャンマー連邦共和国政府承認海外人材送り出し機関
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            関連会社
                                        </td>

                                        <td colspan="3" style="background-color: #CFD5E9;">
                                            HEIWA Training Centre ( 教育機関） <br>
                                            GSJM BRIDGE自動車整備研修センター（教育機関） <br>
                                            ( 株式会社グッドスピードとのジョイントベンチャー設立した研修センター）
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color: #002060; color: white;">
                                            GAS駐日機関
                                        </td>

                                        <td colspan="3" style="background-color: #E8EBF4;">
                                            名古屋本部（責任者：山童賢楽　連絡先：070-1670-1604 )
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="portfolio-one py-5">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <p class="section-title__tagline">
                    ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                </p>
            </div>
            <h2 class="section-title__title">
                Gallery
            </h2>
        </div>

        <div class="portfolio-one__wrapper">
            <div class="portfolio-one__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{
                "loop": true,
                "autoplay": false,
                "margin": 10,
                "nav": false,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    },
                    "1200": {
                        "items": 4
                    }
                }
            }'>
                @foreach ($galleries as $image)
                    <div class="item">
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img-box">
                                <div class="portfolio-one__img">
                                    <img src="{{ asset('data/gallery/' . $image) }}" alt=""
                                        style="width: 100%; height: 400px; object-fit: cover; background-size: corver; object-position: button;">
                                </div>
                                <div class="portfolio-one__content">
                                    <div class="portfolio-one__content-shape"
                                        style="background-image: url({{ asset('assets/images/shapes/portfolio-one-content-shape.png') }});">
                                    </div>
                                    <div class="portfolio-one__title-box">
                                        <p class="portfolio-one__sub-title">
                                            Activities
                                        </p>
                                        <h3 class="portfolio-one__title">
                                            ジーエーエス　カンパニーリミテッド
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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

            <br>
            <center>
                <div class="cta-one__btn-box">
                    <a href="{{ route('myanmar.index') }}" class="cta-one__btn thm-btn">
                        Learn More - Myanmar
                    </a>
                </div>
            </center>
        </div>
    </section>



    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline">
                        ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                    </p>
                </div>
                <h2 class="section-title__title">
                    @if (session('key') == 'jp')
                        私たちのビデオ
                    @elseif (session('key') == 'mm')
                        ကျွန်ုပ်တို့၏ဗီဒီယို
                    @else
                        Our Video
                    @endif
                </h2>
            </div>
            <div class="row">
                @foreach ($videos as $v)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-">
                                    <video width="320" height="240" controls>
                                        <source src="{{ $v->video ?? '' }}" type="video/mp4">
                                        <source src="{{ $v->video ?? '' }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    @if (session('key') == 'jp')
                                        {!! $v->title_jp !!}
                                    @elseif (session('key') == 'mm')
                                    @else
                                        {!! $v->title !!}
                                    @endif
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <section class="services-three">
        <div class="services-three__shape-2">
            <img src="{{ asset('assets/images/shapes/services-three-shape-2.png') }}" alt="">
        </div>
        <div class="services-three__shape-3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/services-three-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline">
                        ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                    </p>
                </div>
                <h2 class="section-title__title">
                    @if (session('key') == 'jp')
                        求人の流れ
                    @elseif (session('key') == 'mm')
                        Recruitment flow
                    @else
                        Recruitment flow
                    @endif
                </h2>
            </div>
            <div class="row d-flex justify-content-center">

                <div class="col-md-9">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r1.jpg') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➀求人受け
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    受け入れ企業様からの求人票を受け、担当者が内容確認をしてから応募者募集が始まります。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-9 py-3">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r2.jpg') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➁募集
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    基本募集条件を公開し、ミャンマー各地から応募者を募ります。
                                    弊社はブローカーを通さず応募者への直接的な募集活動を行う為、応募者のコストを軽減しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-9 py-3">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r4.png') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➂事前選考会
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    事前選考会を実施し、学力・体力・人柄を評価。
                                    高評価の人のみ、採用面接の対象者になります。
                                </p>
                                <br>
                                <img src="{{ asset('data/r3.png') }}" alt=""
                                    style="width: 170px; height: 106px; background-size: center; object-fit: cover;">
                                <img src="{{ asset('data/r4.jpg') }}" alt=""
                                    style="width: 170px; height: 106px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <center>
                    <div class="cta-one__btn-box">
                        <a href="{{ route('recruitment_flow.index') }}" class="cta-one__btn thm-btn">
                            View All
                        </a>
                    </div>
                </center>

            </div>
        </div>
    </section>



    <section class="blog-page" style="padding-top: 20px;">
        <div class="pricing-one__shape-2 float-bob" style="width: 100%;">
            <img src="{{ asset('data/departure.png') }}" alt="" style="width: 100px;">
            {{-- <marquee behavior="scroll" direction="right">
                <img src="{{ asset('data/departure.png') }}" alt="" style="width: 50px;">
            </marquee> --}}
        </div>


        <div class="pricing-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/pricing-one-shape-3.png') }}" alt="">
        </div>

        <div class="pricing-one__shape-4">
            <img src="{{ asset('assets/images/shapes/pricing-one-shape-4.png') }}" alt="">
        </div>

        <div class="container">

            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline">
                        @if (session('key') == 'jp')
                            ギャラリー
                        @elseif (session('key') == 'mm')
                            ဓာတ်ပုံများ
                        @else
                            Gallery
                        @endif
                    </p>
                </div>
                <h2 class="section-title__title">
                    @if (session('key') == 'jp')
                        フォトギャラリーをチェックしてください
                    @elseif (session('key') == 'mm')
                        ဓာတ်ပုံများ
                    @else
                        Checkout our photo gallery
                    @endif
                </h2>
            </div>


            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-xl-4 col-lg-4">
                            <div class="blog-one__single"
                                style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ $image }}" alt="image_not_found"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="blog-one__content">

                                    <div class="blog-one__tag">
                                        <span>
                                            ジーエーエス　カンパニーリミテッド
                                        </span>
                                    </div>

                                    <h3 class="blog-one__title" style="margin-bottom: 5px;">
                                        @if (session('key') == 'jp')
                                            {{ $activity->title_jp ?? $activity->title }}
                                        @elseif (session('key') == 'mm')
                                        @else
                                            {{ $activity->title ?? '' }}
                                        @endif
                                    </h3>

                                    <p>
                                        @if (session('key') == 'jp')
                                            {{ $activity->description_jp ?? $activity->description }}
                                        @elseif (session('key') == 'mm')
                                        @else
                                            {{ $activity->description ?? '' }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>




    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/news_one.css') }}">

    <section class="product-details" style="padding: 10px 0 0;">
        <div class="testimonial-one__shape-1 img-bounce">
            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
        </div>

        <div class="container">
            <div class="product-details__top">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center margin-bottom20 py-3">
                            <h4>
                                Latest News </h4>
                            <div class="bordercaption"></div>
                        </div>
                    </div>

                    @foreach ($news as $new)
                        <div class="margin-bottom20">
                            <div class="calendar-box edit-cdr">
                                <div class="month" style="background: #61A7D9">
                                    Mar 2022
                                </div>
                                <div class="date">
                                    <b>10</b>
                                </div>
                            </div>
                            <div class="update-info" style="background: #bbd4e8;">
                                <a class="wraptext" aria-label="Update" href="{{ route('news.show', $new->id) }}">
                                    <b>
                                        @if (session('key') == 'jp')
                                            {{ $new->title_jp ?? '' }}
                                        @elseif (session('key') == 'mm')
                                            {{ $new->title ?? '' }}::
                                        @else
                                            {{ $new->title ?? '' }}
                                        @endif
                                    </b>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
