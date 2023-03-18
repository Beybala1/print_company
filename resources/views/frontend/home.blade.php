@extends('layouts.app_front')

@section('content')

<section class="hero owl-carousel">
    @forelse ($sliders as $slider)
    <div class="hero__item">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-7">
                    <div class="hero__content">
                        <h2 class="hero__title" data-animation="fadeIn" data-delay=".2s" data-duration=".5s">
                            {{ $slider->title }}
                        </h2>
                        <p data-animation="fadeInUp" data-delay=".5s" data-duration=".7s">
                            {{ $slider->description }}
                        </p>
                        <a data-animation="fadeInUp" data-delay=".7s" data-duration=".9s" href="{{ route('contact') }}"
                            class="site-btn">
                            <span class="icon"><i class="far fa-arrow-right"></i></span> {{ trans('message.contact_us') }}
                        </a>
                        <div class="shape">
                            <img src="frontend/assets/images/shape/hero-shape.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__image d-flex align-self-stretch p-3">
            <img src="{{ url($slider->image) }}" alt="image">
        </div>
    </div>
    @empty
    <p class="text-center">Məzmun yoxdur</p>
    @endforelse
</section>

@include('inc.service')
@include('inc.about')
@include('inc.project')
@include('inc.product')

<!-- news section start -->
<section class="news-area grey-bg pt-120 pb-120">
    <div class="container">
        <div class="row mt-none-30">
            @foreach ($news as $new)
            <div class="col-xl-4 col-lg-6 mt-30">
                <article class="post-box">
                    <div class="post-box__thumb">
                        <a href="{{ route('news.show',[$new->slug]) }}">
                            <img style="height:300px;" src="{{ url($new->image) }}" alt="image">
                        </a>
                        <span class="post-box__cat">Xəbər</span>
                    </div>
                    <div class="post-box__content text-center">
                        <a href="{{ route('news.show',[$new->slug]) }}" class="date-author">{{ $new->created_at }}</a>
                        <h4 class="post-box__title">
                            <a href="{{ route('news.show',[$new->slug]) }}">{{ $new->title }}</a>
                        </h4>
                        <a href="{{ route('news.show',[$new->slug]) }}" class="inline-btn">
                            <span class="icon"><i class="far fa-arrow-right"></i></span>
                            Oxumağa davam et
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- news section end -->

<!-- cta section start -->
<section class="cta-area theme-bg pt-105 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="section-header">
                    <h2 class="section-title section-title__white">{{ trans('message.brand_your_design') }}</h2>
                </div>
            </div>
            <div class="col-xl-4 text-right">
                <div class="cta-right">
                    <a href="{{ route('contact') }}" class="site-btn site-btn__s3">
                        <span class="icon"><i class="far fa-arrow-right"></i></span>
                        {{ trans('message.contact') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta section end -->

<!-- faq section start -->
<section class="faq-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section-header mb-25">
                    <h4 class="sub-heading mb-15">{{ trans('message.common_questions') }}</h4>
                    <h2 class="section-title">{{ trans('message.questions') }}</h2>
                </div>
                <div class="accordion faqs" id="accordionFaq">
                    @forelse ($faqs as $key => $faq)
                    <div class="card">
                        <div class="card__header" id="heading_{{ $key }}">
                            <h5 class="mb-0 title">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_{{ $key }}" aria-expanded="false"
                                    aria-controls="collapse_{{ $key }}">
                                    {{ $faq->title }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_{{ $key }}" class="collapse" aria-labelledby="heading_{{ $key }}"
                            data-parent="#accordionFaq">
                            <div class="card__body">
                                <p>
                                    {{ $faq->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center">Məzmun yoxdur</p>
                    @endforelse
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-bg">
                    <img src="frontend/assets/images/bg/faq-bg-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section end -->

<!-- brand section start -->
<div class="brand-section pt-125 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-carousel owl-carousel">
                    <div class="brand-carousel__item">
                        <img class="default" src="frontend/assets/images/brand/brand-1.png" alt="">
                        <img class="hover" src="frontend/assets/images/brand/brand-1-h.png" alt="">
                    </div>
                    <div class="brand-carousel__item">
                        <img class="default" src="frontend/assets/images/brand/brand-2.png" alt="">
                        <img class="hover" src="frontend/assets/images/brand/brand-2-h.png" alt="">
                    </div>
                    <div class="brand-carousel__item">
                        <img class="default" src="frontend/assets/images/brand/brand-3.png" alt="">
                        <img class="hover" src="frontend/assets/images/brand/brand-3-h.png" alt="">
                    </div>
                    <div class="brand-carousel__item">
                        <img class="default" src="frontend/assets/images/brand/brand-4.png" alt="">
                        <img class="hover" src="frontend/assets/images/brand/brand-4-h.png" alt="">
                    </div>
                    <div class="brand-carousel__item">
                        <img class="default" src="frontend/assets/images/brand/brand-5.png" alt="">
                        <img class="hover" src="frontend/assets/images/brand/brand-5-h.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand section end -->
@endsection
