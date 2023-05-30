{{-- @section('title')
    {{ trans('message.about') }}
@endsection

@section('description')
    {{ mb_substr($about->description,0,155) }}
@endsection
<section class="about-area pt-130 pb-130">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 pr-0">
                <div class="about__bg" data-tilt data-tilt-perspective="3000">
                    <img src="{{ url($about->image) }}" alt="{{ $about->title }}">
                </div>
            </div>
            <div class="col-xl-6 pl-80">
                <div class="section-header mb-40">
                    <h2 class="sub-heading mb-10">{{ trans('message.about') }}</h2>
                    <h2 class="section-title mb-35">
                        {{ $about->title }}
                    </h2>
                    <p>
                        {{ $about->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

 --}}