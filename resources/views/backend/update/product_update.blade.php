@extends('layouts.app')

@section('content')
@section('title')
    <title>Məhsul</title>
@endsection
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Məhsul-u redaktə et</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('product.update', [$product_edit->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body" style="margin-right:52%;">
                            <div class="row">
                                @foreach ($product_edit->images as $img)
                                    <div class="col-md-4">
                                        <img class="rounded me-2" alt="200x200" width="200"
                                            src="{{ asset('images/' . $img->images) }}" data-holder-rendered="true">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror"
                            id="inputGroupFile02" multiple>
                        <label class="input-group-text" for="inputGroupFile02">Yüklə</label>
                        @error('images')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div><br>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Məhsulun adı</label>
                        <input type="text" name="title" value="{{ $product_edit->title }}" class="form-control"
                            id="basic-default-fullname" placeholder="Məhsulun adı" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">
                            Kategoriya seçin</label>
                        <select name="category_id" class="form-control @error('category_id') 'is-invalid' @enderror"
                            required>
                            <option value="">Kategoriya seçin</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id==$product_edit->category_id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                            @error('category_id')
                                <span class="inavlid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                        <textarea name="description_1" id="" rows="5" class="form-control" placeholder="Məhsul haqqında"
                            required>{{ $product_edit->description_1 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                        <textarea name="description_2" id="" rows="5" class="form-control" placeholder="Məhsul haqqında">{{ $product_edit->description_2 }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                        <textarea name="description_3" id="" rows="5" class="form-control" placeholder="Məhsul haqqında">{{ $product_edit->description_3 }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                        <textarea name="description_4" id="" rows="5" class="form-control" placeholder="Məhsul haqqında">{{ $product_edit->description_4 }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Məhsul haqqında</label>
                        <textarea name="description_5" id="" rows="5" class="form-control" placeholder="Məhsul haqqında">{{ $product_edit->description_5 }}</textarea>
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Yenilə</button>
                        <a href="{{ route('product.index') }}" class="btn btn-label-secondary">Ləğv et</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
