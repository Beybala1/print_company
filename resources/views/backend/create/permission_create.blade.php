@extends('layouts.app')

@section('content')

@section('title')
<title>İstifadəçilər</title>
@endsection

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">İstifadəçi əlavə et</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">İstifadəçi adı</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            id="basic-default-fullname" placeholder="İstifadəçi adı" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                        class="form-control @error('email') is-invalid @enderror" 
                        id="basic-default-fullname" placeholder="Email" required />
                        @error('email')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Parol</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" 
                            id="basic-default-fullname"
                            placeholder="Parol" required />
                            @error('password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Təkrar Parol</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="basic-default-fullname" placeholder="Təkrar Parol" required />
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Daxil et</button>
                        <a href="{{ route('permission.index') }}" class="btn btn-label-secondary">Ləğv et</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
