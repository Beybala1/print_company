@extends('layouts.app')

@section('content')
@section('title')
    <title>Slayder</title>
@endsection
<div class="table-responsive">    
    <h1>Slider cədvəli</h1>
    <a href="{{ route('slider.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
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
            @foreach ($sliders as $i=>$slider)
            <tr>
                <td>{{ $i+=1}}</td>
                <td><img style="width: 60px; height:60px;" src="{{ url($slider->image) }}"></td>
                <td>{{ $slider->title }}</td>
                <td v-html>{{ mb_substr($slider->description,0,55)."..." }}</td>
                <td>{{ $slider->created_at }}</td>
                <td>
                    <form action="{{ route('slider.destroy',[$slider->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('slider.edit',[$slider->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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