@extends('layouts.app_front')

@section('content')
@section('title')
    {{ trans('message.faq') }}
@endsection
<section class="faq-area faq-area__2 pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 text-center">
                <div class="section-header mb-75">
                    <h4 class="sub-heading sub-heading__2 mb-15">
                        <span><img src="{{ url('frontend/assets/images/shape/heading-shape-3.png') }}" class="mr-5" alt="image"></span>
                        {{ trans('message.common_questions') }}
                        <span><img src="{{ url('frontend/assets/images/shape/heading-shape-4.png') }}" class="ml-5" alt="image"></span>
                    </h4>
                    <h2 class="section-title section-title__2">{{ trans('message.questions') }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="accordion faqs faqs__2" id="accordionFaq">
                    @forelse ($faqs as $key => $faq)
                        <div class="card">
                            <div class="card__header" id="heading_{{ $key }}">
                                <h5 class="mb-0 title">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_{{ $key }}" aria-expanded="false" aria-controls="collapse_{{ $key }}">
                                        {{ $faq->title }}
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_{{ $key }}" class="collapse" aria-labelledby="heading_{{ $key }}" data-parent="#accordionFaq">
                                <div class="card__body">
                                    <p>
                                        {{ $faq->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">Məzmun yoxdur/p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
