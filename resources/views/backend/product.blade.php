@extends('layouts.app')

@section('content')
@section('title')
<title>Məhsullar</title>
@endsection
<div class="table-responsive">
    <h1>Məhsul cədvəli</h1>
    @role('publisher')
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    @endrole
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Şəkil</th>
                <th>Başlıq</th>
                <th>Kategoriya</th>
                <th>Mətn-1</th>
                <th>Mətn-2</th>
                <th>Mətn-3</th>
                <th>Mətn-4</th>
                <th>Mətn-5</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $i=>$product)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>
                    @if($product->images)
                        <img style="width: 60px; height:60px;" src="{{ asset('images/'.$product->images->images) }}">
                    @else
                        <p>Şəkil yoxdur</p>
                    @endif
                </td>
                <td>{{ $product->title   }}</td>
                <td>{{ $product->category->title }}</td>
                <td>{{ mb_substr($product->description_1,0,5) }}</td>
                <td>{{ mb_substr($product->description_2,0,5) }}</td>
                <td>{{ mb_substr($product->description_3,0,5) }}</td>
                <td>{{ mb_substr($product->description_4,0,5) }}</td>
                <td>{{ mb_substr($product->description_5,0,5) }}</td>
                <td>{{ $product->created_at }}</td>
                @role('editor')
                <td>
                    <form action="{{ route('product.destroy',[$product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('product.edit',[$product->id],'edit') }}" class="btn btn-success"><i
                                    class="bi bi-pencil-square"></i></a>
                            @role('destroyer')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            @endrole
                        </div>
                    </form>
                </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
