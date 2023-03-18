@extends('layouts.app')

@section('content')
@section('title')
    <title>Servis</title>
@endsection
<div class="table-responsive">    
    <h1>Servis cədvəli</h1>
    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
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
            @foreach ($services as $i=>$service)
            <tr>
                <td>{{ $i+=1}}</td>
                <td><img style="width: 60px; height:60px;" src="{{ url($service->image) }}"></td>
                <td>{{ $service->title }}</td>
                <td>{{ mb_substr($service->description,0,55)."..." }}</td>
                <td>{{ $service->created_at }}</td>
                <td>
                    <form action="{{ route('service.destroy',[$service->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('service.edit',[$service->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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