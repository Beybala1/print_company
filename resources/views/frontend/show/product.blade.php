@extends('layouts.app_front')

@section('content')

<!-- details content start -->
<div class="details-content-area pt-125 pb-125 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="project-thumb d-flex align-self-stretch">
                    <img src="{{url($product->image)}}" alt="image">
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
                        @foreach ($products as $product)
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="{{url($product->image)}}" alt="image">
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
    <div class="d-flex justify-content-center mt-3">{{ $products->links() }}</div>
</div>
<!-- details content end -->
@endsection
