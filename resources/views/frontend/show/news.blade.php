@extends('layouts.app_front')

@section('content')

@section('title')
    {{ $new->title }}
@endsection

<!-- news area start -->
<div class="blog__area blog__area--2 pt-125 pb-125 pt-3">
    <div class="container">
        <div class="col-xl-12 text-center">
            <div class="section-header mb-65">
                <h2 class="section-title section-title__2">{{ trans('message.news') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <article class="blog__box blog__box--3 blog__box--details">
                    <div class="content pt-50">
                        <div class="cat mb-20">
                            <span>{{ trans('message.news') }}</span>
                        </div>
                        <h3 class="title">
                            {{ $new->title }}
                        </h3>
                        <div class="meta mt-20 mb-20">
                            <span><a href="#0"><i class="far fa-calendar-alt" alt="{{ $new->title }}"></i>
                                {{ $new->created_at }}</a></span>
                        </div>
                        <div class="post-text mb-20">
                            <p>
                                {{ $new->description }}
                            </p>
                        </div>
                        <div class="blog-inner-img mt-40 mb-40">
                            <div class="inner-content">
                                <img src="{{ url($new->image) }}" alt="{{ $new->title }}">
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-xl-4 col-lg-12">
                <div class="sidebar-wrap">
                    <div class="widget sidebar grey-bg mb-40">
                        <h4 class="sidebar__title mb-30">
                            <span><img src="{{url('frontend/assets/images/shape/heading-shape-3.png')}}" class="mr-5"
                                    alt="{{ $new->title }}"></span>
                                {{ trans('message.other_news') }}
                        </h4>
                        <ul class="recent-posts">
                            @foreach ($news as $new)
                            <li>
                                <div class="thumb">
                                    <a style="border-radius: 50%" href="{{ route('news.show',[$new->slug]) }}">
                                        <img style="border-radius: 50%; height:40px;" src="{{ url($new->image) }}"
                                            alt="{{ $new->title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="news-details.html">{{ $new->title }}</a></h6>
                                    <div class="meta"> {{ $new->created_at }}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news area end -->

@endsection
