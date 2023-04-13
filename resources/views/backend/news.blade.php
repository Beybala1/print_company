@extends('layouts.app')

@section('content')
@section('title')
    <title>Xəbərlər</title>
@endsection
<div class="table-responsive">    
    <h1>Xəbər cədvəli</h1>
    @role('publisher')
        <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    @endrole
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Şəkil</th>
                <th>Başlıq</th>
                <th>Mətn</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $i=>$new)
            <tr>
                <td>{{ $i+=1}}</td>
                <td><img style="width: 60px; height:60px;" src="{{ url($new->image) }}"></td>
                <td>{{ $new->title }}</td>
                <td>{{ mb_substr($new->description,0,5)."..." }}</td>
                <td>{{ $new->created_at }}</td>
                @role('editor')
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('news.destroy',[$new->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('news.edit',[$new->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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