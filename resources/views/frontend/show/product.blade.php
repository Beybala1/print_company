
@extends('layouts.app_front')

@section('content')

@section('title')
    {{ $product->title }}
@endsection

{{ $product->description }}

@section('description')
    {{ $product->description_1 }}
@endsection

<div class="details-content-area pt-125 pb-125 pt-3">
    <div class="container">
        <div class="col-xl-12 text-center">
            <div class="section-header mb-65">
                <h4 class="sub-heading sub-heading__2 mb-15">
                    <span><img src="{{ asset('frontend/assets/images/shape/heading-shape-3.png') }}" class="mr-5"
                        alt="image"></span>
                {{ trans('message.products') }}
                    <span><img src="{{ asset('frontend/assets/images/shape/heading-shape-4.png') }}" class=" ml-5"
                        alt="image"></span>
                </h4>
                <h2 class="section-title section-title__2">{{ trans('message.our_products') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="project-thumb d-flex align-self-stretch">
                    <img width="100%" style="height:500px;" src="{{ asset('images/'.$product->images->first()->images) }}" 
                        alt="{{ $product->title }}">
                </div>
            </div>
            <div class="col-xl-4">
                <ul class="project-details blue-bg">
                    <li>{{ trans('message.product_name') }}<span>{{ $product->title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-xl-12">
                <div class="details-content details-content__project">
                    <h2 class="details-content__title mb-20">{{ trans('message.product_description') }}</h2>
                    <p>
                        {{ $product->description_1 }}<br>
                        {{ $product->description_2 }}<br>
                        {{ $product->description_3 }}<br>
                        {{ $product->description_4 }}<br>
                        {{ $product->description_5 }}<br>
                    </p>
                    <br>
                    <h2>{{ trans('message.other_products') }}</h2>
                    <div class="row mt-10">
                        @foreach ($products_page as $product)
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="{{asset('images/'.$product->images->images)}}" alt="{{ $product->title }}">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="{{ route('show',[$product->slug]) }}" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> {{ $product->title }}</h5>
                                            <h4 class="project-item__title">{{ $product->title }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">{{ $products_page->links() }}</div>
</div>
<!-- details content end -->
@endsection
