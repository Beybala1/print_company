@extends('layouts.app_front')

@section('content')

@section('title')
    {{ $product->title }}
@endsection

{{ $product->description }}

@section('description')
    {{ $product->description_1 }}
@endsection

<div class="products container">
    <div class="row  col-md-12 col-lg-8 ">
        @foreach ($product->images as $img)
            <div class="col-6">
                <div class="project-thumb d-flex align-self-stretch">
                    <img width="100%" style="height:300px;" class="mb-3" src="{{ asset('images/' . $img->images) }}"
                        alt="{{ $product->title }}">
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-10 col-lg-4">
        <div>
            <ul class="project-details blue-bg">
                <li>{{ trans('message.product_name') }}<span>{{ $product->title }}</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="row mt-40">
    <div class="col-xl-12">
        <div class="details-content details-content__project">
            <div class="container">
                <h2 class="details-content__title mb-20">{{ trans('message.product_description') }}</h2>
            <p>
                {{ $product->description_1 }}<br>
                {{ $product->description_2 }}<br>
                {{ $product->description_3 }}<br>
                {{ $product->description_4 }}<br>
                {{ $product->description_5 }}<br>
            </p>
            </div>
            <br>
                <section class="container">
                    <h2>{{ trans('message.other_products') }}</h2>
            <div class="row mt-10">
                @foreach ($products as $product)
                    <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                        <div class="project-item">
                            <div class="project-item__thumb project-item__thumb--big">
                                @foreach ($product->images as $img)
                                    <img width="100%" src="{{ asset('images/' . $img->images) }}"
                                        alt="{{ $product->title }}">
                                @break
                                @endforeach
                            </div>
                            <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                <a href="{{ route('show',$product->slug) }}" class="project-item__link">
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
                </section>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mt-3">{{ $products->links() }}</div>
<!-- details content end -->
@endsection
