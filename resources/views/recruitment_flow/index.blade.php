@extends('layouts.main')
@section('title', '求人の流れ')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/r7.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="text-white">
                    @if (session('key') == 'jp')
                        求人の流れ
                    @elseif (session('key') == 'mm')
                        Recruitment flow
                    @else
                        Recruitment flow
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
                                求人の流れ
                            @elseif (session('key') == 'mm')
                                Recruitment flow
                            @else
                                Recruitment flow
                            @endif
                        </li>
                    </ul>
                </div>
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



                <div class="col-md-9 py-3">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r5.jpg') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➃採用
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    面接は、対面またはオンラインでの実施となります。
                                    面接後、採用された技能実習生の家族と弊社担当者が面接を行い、
                                    両親の合意を取ってから選考者を確定致します。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-9 py-3">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r6.jpg') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➄5ヶ月間入国前研修
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    採用された後、日本語教育・日本での生活や文化を学び・体力づくりの指導を行います。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px;">

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="services-three__single" style="padding: 20px 20px 0px;">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('data/r7.jpg') }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-badge"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <h3 class="services-three__title">
                                        <a href="javascript::void(0)">
                                            日本語教育
                                        </a>
                                    </h3>
                                    <p class="services-three__text">
                                        日本語能力N4レベル研修（介護は、N3レベル）。日本語教師が会話
                                        の課内授業と課外授業を行い、会話能力を伸ばします。
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="services-three__single" style="padding: 20px 20px 2px;">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('data/jp_book.webp') }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-badge"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <h3 class="services-three__title">
                                        <a href="javascript::void(0)">
                                            生活教育
                                        </a>
                                    </h3>
                                    <p class="services-three__text">
                                        ゴミの分別・掃除等の生活教育をしっかり行っています。また、
                                        日本でのマナー・日本の文化・在日外国人マニュアルの教育をしっかり
                                        と教えています。
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="services-three__single">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('data/r8.jpg') }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-badge"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <h3 class="services-three__title">
                                        <a href="javascript::void(0)">
                                            体力作り
                                        </a>
                                    </h3>
                                    <p class="services-three__text">
                                        ジムで体力作りをしっかり指導します。
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-9">
                    <div class="comment-one">
                        <div class="comment-one__single" style="padding: 5px 5px 5px;">
                            <div class="comment-">
                                <img src="{{ asset('data/r9.jpg') }}" alt=""
                                    style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    ➅入国後フォロー
                                </h3>
                                <p style="font-size: 16px; font-weight: 500px; color: black;">
                                    名古屋に事務所が有り、日本にミャンマー人スタッフが常駐している為、迅速な対応が可能です。
                                    また、現地からミャンマーの教師・スタッフが定期的にヒアリングを行い、悩み相談を受けます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br><br><br>
@endsection
