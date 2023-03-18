@extends('layouts.app')

@section('content')
@section('title')
    <title>Faq</title>
@endsection
<div class="table-responsive">    
    <h1>Faq cədvəli</h1>
    <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Başlıq</th>
                <th>Açıqlama</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $i=>$faq)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $faq->title }}</td>
                <td>{{ mb_substr($faq->description,0,55)."..." }}</td>
                <td>{{ $faq->created_at }}</td>
                <td>
                    <form action="{{ route('faq.destroy',[$faq->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('faq.edit',[$faq->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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