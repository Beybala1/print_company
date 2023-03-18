@extends('layouts.app')

@section('content')

@section('title')
<title>Profilim</title>
@endsection
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Profilim /</span> {{ auth()->user()->name }}
</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile detalları</h5>
            <form action="{{ route('profile.update') }}" method="POST" id="formAccountSettings"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ url(auth()->user()->image) }}" alt="user-avatar" class="d-block rounded"
                            height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Şəkil yüklə</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" name="image" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            {{-- <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Resetlə</span>
                            </button> --}}
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">İstifadəçi adı</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control"
                                id="name" placeholder="İstifadəçi adı" autofocus required />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control"
                                id="email" placeholder="Emailiniz" required />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Cari parol</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Cari parol" required />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="password_new" class="form-label">Yeni parol</label>
                            <input type="password" name="password_new" class="form-control" id="password_new"
                                placeholder="Yeni parol 6 simvoldan az ola bilməz!" />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="password_confirmation" class="form-label">Təkrar parol</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation" placeholder="Təkrar parol" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Yadda saxla</button>
                        <button type="reset" class="btn btn-label-secondary">Ləğv et</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
