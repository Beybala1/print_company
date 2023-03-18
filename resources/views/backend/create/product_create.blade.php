@extends('layouts.app')

@section('content')

@section('title')
<title>Məhsul</title>
@endsection

<div class="row">
<div class="col-xl">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Məhsul əlavə et</h5>
        </div>
        <div class="card-body">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @isset($id)
                <input type="hidden" name="product_id" value="{{ $id }}">
            @endisset
            <div class="input-group">
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02" required>
                <label class="input-group-text" for="inputGroupFile02">Yüklə</label>
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div><br>
            <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Məhsulun adı</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="basic-default-fullname"
                    placeholder="Məhsulun adı" required/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                <textarea name="description_1" id="" rows="5" class="form-control"
                    placeholder="Məhsul haqqında" required>{{ old('description_1') }}</textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                <textarea name="description_2" id="" rows="5" class="form-control"
                    placeholder="Məhsul haqqında" >{{ old('description_2') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                <textarea name="description_3" id="" rows="5" class="form-control"
                    placeholder="Məhsul haqqında" >{{ old('description_3') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                <textarea name="description_4" id="" rows="5" class="form-control"
                    placeholder="Məhsul haqqında" >{{ old('description_4') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                <textarea name="description_5" id="" rows="5" class="form-control"
                    placeholder="Məhsul haqqında" >{{ old('description_5') }}</textarea>
            </div>
            
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Daxil et</button>
                <a href="{{ route('product.index') }}" class="btn btn-label-secondary">Ləğv et</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
