@extends('layouts.app_front')

@section('content')

@section('title')
    {{ $project->title }}
@endsection

@section('description')
    {{ $project->description }}
@endsection

<div class="details-content-area pt-125 pb-125 pt-3">
    <div class="container">
        <div class="col-xl-12 text-center">
            <div class="section-header mb-65">
                <h4 class="sub-heading sub-heading__2 mb-15">
                    <span>
                        <img src="http://print_company.test/frontend/assets/images/shape/heading-shape-3.png" class="mr-5" alt="image">
                    </span>
                    Projects
                    <span>
                        <img src="http://print_company.test/frontend/assets/images/shape/heading-shape-4.png" class="ml-5" alt="image">
                    </span>
                </h4>
                <h2 class="section-title section-title__2">Our projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="project-thumb d-flex align-self-stretch">
                    <img width="100%" style="height:500px;" src="{{url($project->image)}}" alt="{{ $project->title }}">
                </div>
            </div>
            <div class="col-xl-4">
                <ul class="project-details blue-bg">
                    <li>{{ trans('message.project_name') }}<span>{{ $project->title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-xl-12">
                <div class="details-content details-content__project">
                    <h2 class="details-content__title mb-20">{{ trans('message.project_description') }}</h2>
                    <p>
                        {{ $project->description }}
                    </p>
                    <div class="row mt-10">
                        @foreach ($projects as $project)
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img width="100%" style="height:500px;" src="{{url($project->image)}}" alt="{{ $project->title }}">
                                    </div>
                                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                                        <a href="{{ route('show',[$project->slug]) }}" class="project-item__link">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                        <div class="project-item__content">
                                            <h5 class="project-item__subtitle"><span>//</span> {{ $project->title }}</h5>
                                            <h4 class="project-item__title">{{ $project->title }}</h4>
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
    <div class="d-flex justify-content-center mt-3">{{ $projects->links() }}</div>
</div>
<!-- details content end -->
@endsection
