@extends('layouts.app')

@section('content')
@section('title')
<title>Alt məhsullar</title>
@endsection
<div class="table-responsive">
    <h1>Alt məhsul cədvəli</h1>
    <a href="{{ route('subProduct.create',[$product->id]) }}" class="btn btn-primary mb-3">Əlavə et</a>
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Şəkil</th>
                <th>Başlıq</th>
                <th>Mətn-1</th>
                <th>Mətn-2</th>
                <th>Mətn-3</th>
                <th>Mətn-4</th>
                <th>Mətn-5</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $i=>$product)
            <tr>
                <td>{{ $i+=1}}</td>
                <td><img style="width: 60px; height:60px;" src="{{ url($product->image) }}"></td>
                <td>{{ $product->title }}</td>
                <td>{{ mb_substr($product->description_1,0,5) }}</td>
                <td>{{ mb_substr($product->description_2,0,5) }}</td>
                <td>{{ mb_substr($product->description_3,0,5) }}</td>
                <td>{{ mb_substr($product->description_4,0,5) }}</td>
                <td>{{ mb_substr($product->description_5,0,5) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <form action="{{ route('product.destroy',[$product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('product.edit',[$product->id],'edit') }}" 
                                class="btn btn-success"
                                title="Redaktə">
                                <i class="bi bi-pencil-square"></i>
                            </a>    
                            <button type="submit" 
                                class="btn btn-danger" 
                                title="Sil">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
