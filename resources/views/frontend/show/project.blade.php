@extends('layouts.app_front')

@section('content')

<!-- details content start -->
<div class="details-content-area pt-125 pb-125 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="project-thumb d-flex align-self-stretch">
                    <img src="{{url($project->image)}}" alt="image">
                </div>
            </div>
            <div class="col-xl-4">
                <ul class="project-details blue-bg">
                    <li>Project Name<span>{{ $project->title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-xl-12">
                <div class="details-content details-content__project">
                    <h2 class="details-content__title mb-20">Project Description</h2>
                    <p>
                        {{ $project->description }}
                    </p>
                    <div class="row mt-10">
                        @foreach ($projects as $project)
                            <div class="col-xl-6 col-lg-6 col-md-6 d-flex mt-30">
                                <div class="project-item">
                                    <div class="project-item__thumb project-item__thumb--big">
                                        <img src="{{url($project->image)}}" alt="image">
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
