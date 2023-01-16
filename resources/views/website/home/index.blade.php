@extends('website.master')

@section('body')
    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider__area fix">
            <div class="container">
                <div class="slider-active">
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="{{asset('/')}}website/assets/img/interior/interior_01.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="{{asset('/')}}website/assets/img/interior/interior_02.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="{{asset('/')}}website/assets/img/interior/interior_03.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="{{asset('/')}}website/assets/img/interior/interior_04.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- category-area -->
        <section class="category__area section__hover-line pt-75">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">category</span>
                                <h3 class="section__main-title">Top Categories</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Category <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category__wrapper">
                    <div class="category__item">
                        <a href="blog.html">
                            <img src="{{asset('/')}}website/assets/img/category/category01.jpg" alt="img">
                            <span class="cat-name">technology</span>
                        </a>
                    </div>
                    <div class="category__item">
                        <a href="blog.html">
                            <img src="{{asset('/')}}website/assets/img/category/category02.jpg" alt="img">
                            <span class="cat-name">multiverse</span>
                        </a>
                    </div>
                    <div class="category__item">
                        <a href="blog.html">
                            <img src="{{asset('/')}}website/assets/img/category/category03.jpg" alt="img">
                            <span class="cat-name">sports</span>
                        </a>
                    </div>
                    <div class="category__item">
                        <a href="blog.html">
                            <img src="{{asset('/')}}website/assets/img/category/category04.jpg" alt="img">
                            <span class="cat-name">nature</span>
                        </a>
                    </div>
                    <div class="category__item">
                        <a href="blog.html">
                            <img src="{{asset('/')}}website/assets/img/category/category05.jpg" alt="img">
                            <span class="cat-name">crypto / nft</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-area-end -->

        <!-- trending-area -->
        <section class="trending-post-area section__hover-line pt-75 pb-80">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Popular Posts</span>
                                <h3 class="section__main-title">Trending News</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__slider">
                    <div class="swiper-container trending-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_08.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Gaming</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.0k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                            <li><i class="fal fa-share-alt"></i> 29</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_09.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">tech</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.0k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 115</a></li>
                                            <li><i class="fal fa-share-alt"></i> 19</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_10.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.2k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 110</a></li>
                                            <li><i class="fal fa-share-alt"></i> 16</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_11.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 42</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_12.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of potentially diverse</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-area-end -->

        <!-- popular-area -->
        <section class="popular__post-area white-bg section__hover-line pt-75 pb-75">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Recent</span>
                                <h3 class="section__main-title">Recent Post</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Popular Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__slider">
                    <div class="swiper-container popular-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_05.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Gaming</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Why we need guidelines for brain scan data to real data.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_06.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">tech</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_07.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_08.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/interior/interior_09.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of the potentially diverse</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
