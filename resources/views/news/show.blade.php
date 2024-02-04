@extends('layouts.main')
@section('title', 'News')
@section('content')

    <section class="page-header" style="padding: 20px 0 20px;">
        <div class="container">
            <div class="page-header__inner">
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
                                ニュース
                            @elseif (session('key') == 'mm')
                                သတင်း
                            @else
                                Latest News
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="insurance-details" style="padding: 20px 0 120px;">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                    <div class="insurance-details__left">
                        <h3 class="insurance-details__title-1" style="font-size: 27px;">
                            @if (session('key') == 'jp')
                                {{ $new->title_jp ?? '' }}
                            @elseif (session('key') == 'mm')
                                {{ $new->title ?? '' }}::
                            @else
                                {{ $new->title ?? '' }}
                            @endif
                        </h3>
                        <p class="insurance-details__text-1">
                            @if (session('key') == 'jp')
                                {!! $new->description_jp ?? '' !!}
                            @elseif (session('key') == 'mm')
                                {!! $new->description ?? '' !!}
                            @else
                                {!! $new->description ?? '' !!}
                            @endif
                        </p>

                        <div class="insurance-details__img-1">
                            <img src="{{ $new->photo ?? '' }}" alt="">
                        </div>

                        <div class="blog-details__img-box">
                            <div class="row">
                                @php
                                    $images = explode(',', $new->gallery);
                                @endphp
                                @foreach ($images as $image)
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="blog-details__img-box-img">
                                            <img src="{{ $image }}" alt="image_not_found"
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-4 col-lg-5">
                    <div class="insurance-details__right">
                        @include('components.quick_link')

                        <div class="insurance-details__need-help">
                            <div class="insurance-details__need-help-bg"
                                style="background-image: url({{ asset('assets/images/backgrounds/insurance-details-need-help-bg.jpg') }});">
                            </div>
                            <h3 class="insurance-details__need-help-title">Need Any Types
                                <br> of Service
                                <br> from us
                            </h3>
                            <div class="insurance-details__need-help-btn-box">
                                <a href="{{ route('contact.index') }}" class="insurance-details__need-help-btn thm-btn">
                                    Contact Us
                                </a>
                            </div>
                        </div>


                        <div class="insurance-details__contact">
                            <div class="insurance-details__contact-icon">
                                <span class="icon-telephone-1"></span>
                            </div>
                            <div class="insurance-details__contact-content">
                                <span>You can call anytime</span>
                                <p>Free<a href="tel:+95(9)445652455">+95(9)445652455</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
