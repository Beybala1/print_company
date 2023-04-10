@extends('layouts.app_front')

@section('content')

@section('title')
    {{ trans('message.contact') }}
@endsection

@section('description')
    {{ 'Bizim ilə əlaqə' }}
@endsection

@include('sweetalert::alert')
<section class="gta-area gta-area__2 pt-125 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="gta-bg__2">
                    <img src="{{url('frontend/assets/images/bg/gta-bg-2.png')}}" alt="image">
                </div>
            </div>
            <div class="col-xl-6 pl-50">
                <div class="section-header mb-50">
                    <h4 class="sub-heading sub-heading__2 mb-15">{{ trans('message.message') }}
                        <span><img src="{{url('frontend/assets/images/shape/heading-shape-4.png')}}" class="mr-10" alt="image"></span>
                    </h4>
                    <h2 class="section-title section-title__2">{{ trans('message.contact_us') }}</h2>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="contact-form">
                    <form action="{{ route('message') }}" method="POST">
                        @csrf
                        <div class="form-group mt-25">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ trans('message.contact_name') }}" required>
                        </div>
                        <div class="form-group mt-25">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ trans('message.contact_email') }}" required>
                        </div>
                        <div class="form-group mt-25">
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="{{ trans('message.contact_subject') }}" required>
                        </div>
                        <div class="form-group mt-25">
                            <textarea name="content" placeholder="{{ trans('message.contact_message') }}" required>{{ old('content') }}</textarea>
                        </div>
                        <button type="submit" class="site-btn site-btn__2 mt-15">
                            <span class="icon icon__black">
                                <i class="far fa-arrow-right"></i>
                            </span> 
                            {{ trans('message.contact_us') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gta section end -->

<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3037.6435705168133!2d49.828870815395874!3d40.41674617936515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDI1JzAwLjMiTiA0OcKwNDknNTEuOCJF!5e0!3m2!1sen!2saz!4v1678168113307!5m2!1sen!2saz" width="1310" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection