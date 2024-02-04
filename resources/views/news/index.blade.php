@extends('layouts.main')
@section('title', 'News')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/news_banner.png') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="text-white">
                    @if (session('key') == 'jp')
                        ニュース
                    @elseif (session('key') == 'mm')
                        သတင်း
                    @else
                        News
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


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/news_one.css') }}">

    <section class="product-details" style="padding: 10px 0 0;">
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

    <br><br><br><br><br>
@endsection
