@extends('layouts.app')

@section('content')

@section('title')
<title>Sosial şəbəkə</title>
@endsection
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Sosial şəbəkələri redaktə et</h5>
            </div>
            <div class="card-body">
            <form action="{{ route('social.update',[$social_edit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Başlıq</label>
                    <input type="text" name="title" value="{{ $social_edit->title }}" class="form-control" id="basic-default-fullname"
                        placeholder="Başlıq" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Link</label>
                    <input type="text" name="link" value="{{ $social_edit->link }}" class="form-control" id="basic-default-fullname"
                        placeholder="Link" required/>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Yenilə</button>
                    <a href="{{ route('social.index') }}" class="btn btn-label-secondary">Ləğv et</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
