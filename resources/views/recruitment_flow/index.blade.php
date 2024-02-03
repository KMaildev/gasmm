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
                                <img src="{{ asset('data/r1.jpg') }}" alt="" style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    求人受け
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
                                <img src="{{ asset('data/r2.jpg') }}" alt="" style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    募集
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
                                <img src="{{ asset('data/r4.png') }}" alt="" style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    事前選考会
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
                                <img src="{{ asset('data/r5.jpg') }}" alt="" style="width: 300px; height: 250px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="comment-one__content">
                                <h3 style="color: #0f76bc; font-size: 30px; font-weight: 600px">
                                    採用
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

            </div>
        </div>
    </section>

    <br><br><br>
@endsection
