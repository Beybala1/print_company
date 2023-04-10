@extends('layouts.app')

@section('content')
@section('title')
    <title>Kategoriya</title>
@endsection
<div class="table-responsive">    
    <h1>Kategoriya cədvəli</h1>
    @role('publisher')
        <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    @endrole
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Başlıq</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $i=>$category)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->created_at }}</td>
                @role('editor')
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('category.destroy',[$category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('category.edit',[$category->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                @role('destroyer')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                @endrole
                            </form>
                        </div>
                    </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection