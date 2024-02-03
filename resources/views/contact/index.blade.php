@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="contact-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__left">
                        <h3 class="contact-page__title">
                            Get in Touch
                        </h3>
                        <p class="contact-page__text">
                            @if (session('key') == 'jp')
                                いつでもお電話いただくか、お立ち寄りください。営業日の 24 時間以内にすべてのお問い合わせにお答えするよう努めております。ご質問に喜んでお答えいたします。
                            @elseif (session('key') == 'mm')
                                ရုံးလိပ်စာ
                            @else
                                Give us a call or drop by anytime, we endeavour to answer all inquiries within 24 hours on
                                business days. We will be happy to answer your questions.
                            @endif
                        </p>
                        <div class="contact-page__contact-info">
                            <h4 class="contact-page__contact-info-title">Contact Info</h4>
                            <ul class="contact-page__contact-list list-unstyled">

                                <li>
                                    <h5>
                                        @if (session('key') == 'jp')
                                            所在地
                                        @elseif (session('key') == 'mm')
                                            ရုံးလိပ်စာ
                                        @else
                                            Office Address
                                        @endif
                                    </h5>
                                    <p>
                                        NO 19/130, YADANARBONE KYAUNG STREET, MAYANGONE TOWNSHIP, YANGON REGION, MYANMAR
                                    </p>
                                </li>


                                <li>
                                    <h5>Myanmar Number</h5>
                                    <p>
                                        <a href="tel: +95(9)445652455" title="Click to Call">
                                            +95(9)445652455
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <h5>Japan Number</h5>
                                    <p>
                                        <a href="tel:+819032316684" title="Click to Call">
                                            +819032316684
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <h5>Email</h5>
                                    <p>
                                        <a href="mailto:info@gas-mm.com">
                                            info@gas-mm.com
                                        </a>
                                    </p>
                                </li>
                            </ul>
                            <a href="https://gas-mm.com/" class="contact-page__link">
                                www.gas-mm.com
                            </a>
                        </div>
                    </div>


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

                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__right">
                        <div class="contact-page__img">
                            <img src="{{ asset('data/building.jpg') }}" alt=""
                                style="box-shadow: rgba(228, 21, 21, 0.16) 0px 1px 4px, rgb(221, 6, 6) 0px 0px 0px 3px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-choose-three why-choose-five" style="padding: 80px 0 30px;">
        <div class="why-choose-three__shape-1">
            <img src="{{ asset('assets/images/shapes/why-choose-five-shape-1.png') }}" alt="">
        </div>
        <div class="why-choose-three__shape-2 img-bounce">
            <img src="{{ asset('assets/images/shapes/why-choose-five-shape-2.png') }}" alt="">
        </div>
        <div class="why-choose-three__shape-3 float-bob-x">
            <img src="{{ asset('data/departure.png') }}" alt="" style="width: 100px;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">

                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">
                                ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                            </p>
                        </div>
                        <h2 class="section-title__title">
                            Our Office Location
                        </h2>
                    </div>

                    <img src="{{ asset('data/map.png') }}" alt="" style="width: 100%;">
                </div>

                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                    <ul class="why-choose-one__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span>
                                    <i class="fa-solid fa-plane-departure fa-xs"></i>
                                </span>
                            </div>
                            <div class="content">
                                <h5>
                                    ヤンゴン国際空港からアクセスが便利な所
                                </h5>
                                <p>
                                    G A S はヤンゴン国際空港から約19分・ダウンタウンエリアから約45分の場所にあり、北ダゴンエリアにあります。
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span>
                                    <i class="fa-solid fa-user-tie fa-xs"></i>
                                </span>
                            </div>
                            <div class="content">
                                <h5>
                                    応募者の便利性
                                </h5>
                                <p>
                                    北ダゴン区はバスの路線も多く有り、来社するのに利便性が高いエリアです。
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span>
                                    <i class="fa-solid fa-dollar-sign fa-xs"></i>
                                </span>
                            </div>
                            <div class="content">
                                <h5>
                                    応募者のコスト軽減
                                </h5>
                                <p>
                                    周辺の家賃が安く応募者の負担が軽減出来る。
                                    予定している寮の建設及び維持費用も軽減可能。
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <span>
                                    <i class="fa-solid fa-id-card-clip fa-xs"></i>
                                </span>
                            </div>
                            <div class="content">
                                <h5>
                                    OWICスマートカード発行所の近い
                                </h5>
                                <p>
                                    技能実習生も含め、海外へ赴いた様々な労働者の為、労働法講習を受ける機関や、OWIC（スマート）カードを発行するミャンマー労働省に隣接した場所に弊社の事務所が有り、書類作成業務もスムーズに行えます。
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>

    </section>


    <section class="pricing-one" style="padding: 30px 0 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/jp-map.png') }}" alt="" style="width: 100%;">
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/qr.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>



    <section class="contact-page" style="padding: 10px 0 150px;">
        <div class="container">
            <div class="contact-page__bottom" style="margin-top: 0px;">
                <div class="comment-form">
                    <h3 class="comment-one__title">Let’s Get in Touch</h3>
                    <p>
                        G A S は企業様からのお問い合わせをお待ちしております。
                    </p>

                    <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form main-contact-form"
                        id="create-form">
                        @csrf
                        <div class="main-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input name="name" type="text" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input name="email" type="text" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input name="phone" type="text" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input name="subject" type="text" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" cols="40" rows="10" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form__btn-box">
                                <button type="submit" class="thm-btn comment-form__btn">
                                    Send Meassage
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="result"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
