@extends('layouts.app')

@section('content')

@section('title')
<title>Əlaqə məlumatları</title>
@endsection

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Əlaqə məlumatı əlavə et</h5>
            </div>
            <div class="card-body">
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="basic-default-email"
                        placeholder="Email" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone_1">Nömrə-1</label>
                    <input type="tel" name="phone_1" value="{{ old('phone_1') }}" class="form-control" id="basic-default-phone_1"
                        placeholder="Nömrə-1" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone_2">Nömrə-2</label>
                    <input type="tel" name="phone_2" value="{{ old('phone_2') }}" class="form-control" id="basic-default-phone_2"
                        placeholder="Nömrə-2"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-place_1">Məkan-1</label>
                    <input type="text" name="place_1" value="{{ old('place_1') }}" class="form-control" id="basic-default-place_1"
                        placeholder="Məkan-1" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-place_2">Məkan-2</label>
                    <input type="text" name="place_2" value="{{ old('place_2') }}" class="form-control" id="basic-default-place_2"
                        placeholder="Məkan-2"/>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Daxil et</button>
                    <a href="{{ route('contact.index') }}" class="btn btn-label-secondary">Ləğv et</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
