@extends('layouts.main')
@section('title', 'About Us')
@section('content')
    <section class="page-header" style="padding: 216px 0 290px;">
        <div class="page-header__bg" style="background-image: url({{ asset('data/20.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="text-white">
                    @if (session('key') == 'jp')
                        会社概要
                    @elseif (session('key') == 'mm')
                        ကုမ္ပဏီအကြောင်း
                    @else
                        About Us
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
                            ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                        </li>
                    </ul>
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
                                <a href="mailto:info@gas-mm.com" class="about-two__btn thm-btn">
                                    Send Mail
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
                <div class="row">
                    <div class="col-md-12">
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



    <section class="blog-details" style="padding: 50px 0 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">

                        <div class="comment-one">
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="{{ asset('data/md1.png') }}" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>
                                        代表
                                    </h3>
                                    <h5>
                                        SAN YADANAR AUNG
                                    </h5>
                                    <h5>
                                        サン　ヤダナ　アウン
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="comment-one py-3">
                            <div class="comment-one__single">
                                <div class="comment-">
                                    <img src="{{ asset('data/md2.png') }}" alt="" style="width: 200px">
                                </div>
                                <div class="comment-one__content">
                                    <h3>
                                        CEO
                                    </h3>
                                    <h5>
                                        WAI LIN MAUNG
                                    </h5>
                                    <h5>
                                        ウェイ　リン　マウン
                                    </h5>
                                </div>
                            </div>
                        </div>


                        <div class="blog-details__content">
                            <h3 class="blog-details__title-1">
                                G A S紹介
                            </h3>
                            <ul class="list-unstyled blog-details__meta">
                                <li>
                                    <a href="javascript::void(0)">
                                        <i class="fas fa-user-circle"></i>
                                        MD
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)">
                                        <i class="fas fa-user-circle"></i>
                                        MD
                                    </a>
                                </li>
                            </ul>
                            <p class="" style="font-size: 14px;">
                                G A Sは2015年1月16日に設立しました。
                                設立後、国内人材事業とともに2022年6月にミャンマー連邦共和国政府から海外人材送り出し機関ライセンスを承認され日本への人材送り出しを開始しました。
                                母国発展の為、日本の技術を身に付けたいミャンマーの若者達の想いを実現させるため弊社は日本とミャンマーの架け橋として努力したいと思います。 そのためミャンマーのヤンゴン州で
                                HEIWA日本語教育センターを開いており、日本企業で働く為に必ず必要な日本語講習、日本のマナー、5ｓ、日本の文化、ゴミ分別や交通ルールなどを教育しています。
                                <br><br>
                                弊社としてはHEIWA日本語教育センターだけではなく、日本の上場企業である株式会社グッドスピードと提携し日本で活躍できる自動車整備士を育てる為、GSJM BRIDGE
                                自動車整備研修センターを2023年に設立しました。日本入国後の実習生サポート体制も充実しています。名古屋に弊社のサポート事務所を設置しており、実習生とも定期的に連絡を取り日本での実習や生活をフォローしています。日本で所定期間の実習後は、ミャンマー国内での勤務先を紹介し日本で学んだ技術・知識・経験を十分に発揮出来るようサポートしています。
                                <br><br>
                                弊社は日本のみの送り出し機関であり、他の国への送り出しをしてない為、他の国での人材問題リスクは無く、ライセンスの維持も安定しています。メールでのお問い合わせ又はお電話にて視察・見学希望や送り出しに関する詳細などをお問い合わせ下さい。御社様からのご連絡をお待ちしております。
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        @include('components.quick_link')

                        @include('components.news')

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services-two">
        <div class="services-two__shape-3">
            <img src="assets/images/shapes/services-two-shape-3.png" alt="">
        </div>

        <div class="services-two__shape-4">
            <img src="assets/images/shapes/services-two-shape-4.png" alt="">
        </div>

        <div class="services-two__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="section-title text-center py-5" style="padding-top: 50px;">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline">
                                    ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                                </p>
                            </div>
                            <h2 class="section-title__title" style="font-size: 30px;">
                                ミャンマー連邦共和国政府承認したG A S
                                <br>
                                <span class="color3" style="font-size: 25px; color: blue;">
                                    Approved by Ministry of Labour
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-3">
                        <div class="security-card" style=" text-align:center;">
                            <img src="{{ asset('data/1.jpg') }}" alt="About Images"
                                style="width:300px; height:400px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        </div>
                        <div class="py-2">
                            <p style="font-size: 20px; color: black;">
                                会社登記簿謄本
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-3">
                        <div class="security-card" style=" text-align:center;">
                            <img src="{{ asset('data/2.jpg') }}" alt="About Images"
                                style="width:300px; height:400px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        </div>
                        <div class="py-2">
                            <p style="font-size: 20px; color: black;">
                                ミャンマー連邦共和国政府承認海外人材送り出し機関
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-two__bottom py-5">
            <div class="container">
                <div class="services-two__bottom-inner">
                    <div class="services-two__bottom-img">
                        <img style="width: 300px;" src="{{ asset('data/contact-us.webp') }}" alt="">
                    </div>
                    <h3 class="services-two__bottom-title">
                        If you have any queries <br> our team is ready to
                        response <br> all your queries.
                    </h3>
                    <div class="services-two__bottom-btn-box">
                        <a href="{{ route('contact.index') }}" class="services-two__bottom-btn thm-btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline">
                        ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                    </p>
                </div>
                <h2 class="section-title__title">
                    G A Sの実績
                </h2>
            </div>
            <div class="row">

                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <h4>
                        2022年10月20日～2023年11月30日までの
                    </h4>

                    <br>

                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="background: #002060; color: white; text-align: center;">
                                    送り出し人数
                                </td>
                                <td style="background: #002060; color: white; text-align: center;">
                                    取引協同組合数
                                </td>
                            </tr>

                            <tr>
                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    179名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    13組合
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="background: #002060; color: white; text-align: center;">
                                    技能実習生
                                </td>
                                <td style="background: #002060; color: white; text-align: center;">
                                    特定技能
                                </td>
                                <td style="background: #002060; color: white; text-align: center;">
                                    義人国
                                </td>
                            </tr>

                            <tr>
                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    120名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    55名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    4名
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="background: #002060; color: white; text-align: center;">
                                    九州地方
                                </td>
                                <td style="background: #002060; color: white; text-align: center;">
                                    関西地方
                                </td>
                                <td style="background: #002060; color: white; text-align: center;">
                                    中国地方
                                </td>

                                <td style="background: #002060; color: white; text-align: center;">
                                    中部地方
                                </td>

                                <td style="background: #002060; color: white; text-align: center;">
                                    北海道地方
                                </td>

                                <td style="background: #002060; color: white; text-align: center;">
                                    四国地方
                                </td>

                                <td style="background: #002060; color: white; text-align: center;">
                                    関東地方
                                </td>

                                <td style="background: #002060; color: white; text-align: center;">
                                    東北地方
                                </td>
                            </tr>

                            <tr>
                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    5名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    30名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    2名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    140名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    0名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    0名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    0名
                                </td>

                                <td style="background: #CFD5E9; color: black; text-align: center;">
                                    0名
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <h4 style="text-align: right">
                        職種別採用者グラフ
                    </h4>

                    <br>

                    <img src="{{ asset('data/4.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>



    <section class="services-two" style="background: white; padding: 50px 0 50px;">

        <div class="get-quote__shape-9 float-bob-y">
            <img src="{{ asset('assets/images/shapes/get-quote-shape-14.png') }}" alt="">
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
                        G A Sの募集方法
                    </h2>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <img src="{{ asset('data/header.png') }}" alt="">
                        </center>
                    </div>

                    <div class="col-md-6 py-5">
                        <div class="blog-details__left">
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <div class="comment-">
                                        <img src="{{ asset('data/11.jpg') }}" alt="" style="width: 200px;">
                                    </div>
                                    <div class="comment-one__content">
                                        <p style="font-size: 13px;">
                                            ブローカー紹介は受けません。
                                            無条件で応募者を受付はしません。
                                            何重にもスクリーニングを行い、きちんと書類を確認した若者のみ受け付けています。
                                            その後仕事の説明会をし、一次選考を行います。
                                        </p>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 py-5">
                        <div class="blog-details__left">
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <div class="comment-one__content">
                                        <p style="font-size: 13px;">
                                            事前選考会には以下の基準でテストを行います。
                                            <br>
                                            ◎日本語能力テスト <br>
                                            ◎体調チェック <br>
                                            ◎メンタルテスト <br>
                                            ◎足し算テスト <br>
                                            ◎性格チェック
                                        </p>
                                    </div>

                                    <div class="comment-">
                                        <img src="{{ asset('data/12.jpg') }}" alt="" style="width: 200px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <center>
                        <div class="col-md-9">
                            <p style="font-size: 20px; color: black;">
                                ＊ ジーエーエスは技能実習生の場合、日本語能力N4レベル卒業者のみを紹介しております。
                                <br>
                                ＊特定技能の場合、各資格を持ってない応募者を企業様に紹介しません。
                            </p>
                        </div>
                    </center>

                </div>
            </div>
        </div>
    </section>



    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img-box">
                            <div class="why-choose-one__img">
                                <img src="{{ asset('data/building.jpg') }}" alt="">
                            </div>

                            <div class="why-choose-one__img-2">
                                <img src="{{ asset('data/8.jpg') }}" alt="" style="width: 400px;">
                            </div>

                            <div class="why-choose-one__img-3">
                                <img src="{{ asset('data/md3.jpg') }}" alt="" style="width: 300px;">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline">
                                    G A Sから設立したHEIWA日本語教育センター紹介
                                </p>
                            </div>
                            <br><br>
                            <p style="color: black; font-size: 19px;">
                                校長 <br>
                                WAI LIN MAUNG <br>
                                ウェイ　リン　マウン <br>
                                在日歴
                            </p>

                            <ul class="team-details__top-points list-unstyled">
                                <li>
                                    <span>
                                        ◎2009年3月　～　現在（永住者として在日）
                                    </span>
                                </li>

                                <li>
                                    <span>◎2009年3月～2014年9月（留学生）</span>
                                </li>

                                <li>
                                    <span>
                                        ◎2014年10月～2019年6月（正社員・自動車関係）
                                    </span>
                                </li>

                                <li>
                                    <span>
                                        ◎2019年7月～2020年9月（正社員・建設関系）
                                    </span>
                                </li>

                                <li>
                                    <span>
                                        ◎2020年10月～2021年11月（組合員・技能実習生管理責任者）
                                    </span>
                                </li>

                                <li>
                                    <span>
                                        ◎2021年12月～現在（送り出し機関の事業を開始）
                                    </span>
                                </li>
                            </ul>

                            <p style="color: black; font-size: 19px;">
                                HEIWA日本語教育センターは2021年11月に開校し、現在生徒450人が日本語の教育を受けています。並行して日本語だけではなく、日本の生活・文化・5Sなどもトレーニングをしています。
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services-two" style="background: white; padding: 50px 0 50px;">
        <div class="get-quote__shape-9 float-bob-y">
            <img src="{{ asset('assets/images/shapes/get-quote-shape-14.png') }}" alt="">
        </div>

        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <p class="section-title__tagline">
                    ミャンマー側の入国までの流れ
                </p>
            </div>
            <h2 class="section-title__title">
                入国準備期間
            </h2>
        </div>

        <div class="container">
            <div class="row">
                <center>
                    <div class="col-md-8">
                        <img src="{{ asset('data/map1.png') }}" alt="" style="width: 100%;">
                    </div>
                </center>
            </div>
        </div>
    </section>
    <br><br><br>
@endsection
