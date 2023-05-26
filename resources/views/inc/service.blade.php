{{-- @section('title')
    {{ trans('message.service') }}
@endsection

@section('description')
    {{ 'Servis və xidmətlərimiz' }}
@endsection

<section class="service-area pt-125 pb-125 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-header mb-75">
                    <h4 class="sub-heading mb-25">
                        <span><img src="{{url('frontend/assets/images/shape/heading-shape-1.png')}}" class="mr-10" alt="image"></span>
                        {{ trans('message.our_service') }}
                        <span><img src="{{url('frontend/assets/images/shape/heading-shape-2.png')}}" class="ml-10" alt="image"></span>
                    </h4>
                    <h2 class="section-title">{{ trans('message.our_servicies') }}</h2>
                </div>
            </div>
        </div>
        <div class="row mt-none-50">
            @forelse ($services as $service)
                <div class="col-xl-6 col-lg-6 mt-50">
                    <div class="service-item d-flex">
                        <div class="service-item__icon service-item__icon--4">
                            <img src="{{ url($service->image) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="service-item__content">
                            <h4 class="service-item__title">{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Məzmun yoxdur</p>
            @endforelse
        </div>
    </div>
</section> --}}