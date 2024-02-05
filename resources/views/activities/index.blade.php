@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/r2.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="text-white">
                    @if (session('key') == 'jp')
                        ギャラリー
                    @elseif (session('key') == 'mm')
                        ဓာတ်ပုံများ
                    @else
                        Gallery
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
                                フォトギャラリーをチェックしてください
                            @elseif (session('key') == 'mm')
                                ဓာတ်ပုံများ
                            @else
                                Checkout our photo gallery
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-page">
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

@endsection
