@extends('layouts.app_front')
@section('content')
    
@section('title')
    {{ trans('message.advertisingProducts') }}
@endsection
<div class="project-area project-area__2 pt-125 mb-3">
    <div class="container-fluid">
        <div class="row project-row mt-none-30">
            @foreach ($products as $product)
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex mt-30">
                    <div class="project-item">
                        <div class="project-item__thumb project-item__thumb--big">
                            @foreach ($product->images as $img)
                                <img src="{{ asset('images/'.$img->images) }}" alt="{{ $product->title }}">
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
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links() }}
    </div>
</div>
@endsection



