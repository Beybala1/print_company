@extends('layouts.app')

@section('content')

@section('title')
<title>Faq</title>
@endsection
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Faq-ı redaktə et</h5>
            </div>
            <div class="card-body">
            <form action="{{ route('faq.update',[$faq_edit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Başlıq</label>
                    <input type="text" name="title" value="{{ $faq_edit->title }}" class="form-control" id="basic-default-fullname"
                        placeholder="Başlıq" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Açıqlama</label>
                    <textarea name="description" id="text" class="form-control" rows="10"
                        placeholder="Açıqlama" required>{{ $faq_edit->description }}</textarea>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Yenilə</button>
                    <a href="{{ route('faq.index') }}" class="btn btn-label-secondary">Ləğv et</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
