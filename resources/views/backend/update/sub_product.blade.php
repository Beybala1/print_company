@extends('layouts.app')

@section('content')

@section('title')
<title>Alt məhsul</title>
@endsection
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Alt məhsul-u redaktə et</h5>
            </div>
            <div class="card-body">
            <form action="{{ route('sub_product.update',[$subProduct->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <img width="985" height="350" class="mb-3" src="{{ url($subProduct->image) }}">
                <div class="input-group">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Yüklə</label>
                    @error('image')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div><br>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Alt Alt məhsulun adı</label>
                    <input type="text" name="title" value="{{ $subProduct->title }}" class="form-control" id="basic-default-fullname"
                        placeholder="Alt Alt məhsulun adı" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Alt Alt məhsul haqqında</label>
                    <textarea name="description_1" id="" rows="5" class="form-control"
                        placeholder="Alt Alt məhsul haqqında" required>{{ $subProduct->description_1 }}</textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Alt məhsul haqqında</label>
                    <textarea name="description_2" id="" rows="5" class="form-control"
                        placeholder="Alt məhsul haqqında" >{{ $subProduct->description_2 }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Alt məhsul haqqında</label>
                    <textarea name="description_3" id="" rows="5" class="form-control"
                        placeholder="Alt məhsul haqqında" >{{ $subProduct->description_3 }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Alt məhsul haqqında</label>
                    <textarea name="description_4" id="" rows="5" class="form-control"
                        placeholder="Alt məhsul haqqında" >{{ $subProduct->description_4 }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Alt məhsul haqqında</label>
                    <textarea name="description_5" id="" rows="5" class="form-control"
                        placeholder="Alt məhsul haqqında" >{{ $subProduct->description_5 }}</textarea>
                </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Yenilə</button>
                        <a href="{{ route('sub_product.show',[$subProduct->id]) }}" class="btn btn-label-secondary">Ləğv et</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
