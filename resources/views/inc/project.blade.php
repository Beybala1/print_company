<div class="project-area project-area__2 pt-125 mb-3 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-header mb-65">
                    <h4 class="sub-heading sub-heading__2 mb-15">
                        <span><img src="{{ url('frontend/assets/images/shape/heading-shape-3.png') }}" class="mr-5"
                                alt=""></span>
                        {{ trans('message.project') }}
                        <span><img src="{{ url('frontend/assets/images/shape/heading-shape-4.png"') }} class=" ml-5"
                                alt=""></span>
                    </h4>
                    <h2 class="section-title section-title__2">{{ trans('message.our_projects') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row project-row mt-none-30">
            @forelse ($projects as $project)
            <div class="col-xl-4 col-lg-6 col-md-6 d-flex mt-30">
                <div class="project-item">
                    <div class="project-item__thumb project-item__thumb--big">
                        <img src="{{ url($project->image) }}" alt="image">
                    </div>
                    <div class="project-item__hover" data-overlay="dark" data-opacity="9">
                        <a href="{{ route('project.show',[$project->slug]) }}" class="project-item__link"><i
                                class="far fa-arrow-right"></i></a>
                        <div class="project-item__content">
                            <h5 class="project-item__subtitle"><span>//</span> {{ $project->title }}</h5>
                            <h4 class="project-item__title">{{ $project->title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Məzmun yoxdur</p>
            @endforelse
        </div>
    </div>
</div>
