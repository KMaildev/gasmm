<section class="blog-two" style="padding-top: 2px;">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <p class="section-title__tagline">
                    ジーエーエス　カンパニーリミテッド
                </p>
            </div>
            <h2 class="section-title__title">
                ミャンマーギャラリー
            </h2>
        </div>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('data/mm_gallery/' . $image) }}" alt=""
                                    style="width: 100%; height: 250px; object-fit: cover; background-size: corver;">
                            </div>
                            <div class="blog-two__tag">
                                <span>Gallery&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
