@extends('website.master')

@section('body')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active mx-auto fw-bold" aria-current="page">Abou Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <!-- slider-area -->
        <section class="slider__area fix">
            @foreach($abouts as  $about)
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-5 col-lg-6">
                       <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">{{$about->title}}</h2>
                       <p class="blog-details" data-animation-in="tg-fadeInUp" data-delay-in="1">{{$about->description}}</p>
                   </div>
                      <div class="col-xl-7 col-lg-6">
                          <div class="slider__img-wrap">
                             <img src="{{asset($about->image)}}" class="main-img" alt="img">
                          </div>
                      </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- slider-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
