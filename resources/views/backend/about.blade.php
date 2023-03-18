@extends('layouts.app')

@section('content')
@section('title')
    <title>Haqqımızda</title>
@endsection
<div class="table-responsive">    
    <h1>Haqqımızda cədvəli</h1>
    <a href="{{ route('about.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Şəkil</th>
                <th>Başlıq</th>
                <th>Açıqlama</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $i=>$about)
            <tr>
                <td>{{ $i+=1}}</td>
                <td><img style="width: 60px; height:60px;" src="{{ url($about->image) }}"></td>
                <td>{{ $about->title }}</td>
                <td>{{ $about->description }}</td>
                <td>{{ $about->created_at }}</td>
                <td>
                    <form action="{{ route('about.destroy',[$about->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('about.edit',[$about->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection