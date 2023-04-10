@extends('layouts.app')

@section('content')
@section('title')
    <title>Faq</title>
@endsection
<div class="table-responsive">    
    <h1>Faq cədvəli</h1>
    @role('publisher')
        <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    @endrole
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Başlıq</th>
                <th>Açıqlama</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $i=>$faq)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $faq->title }}</td>
                <td>{{ mb_substr($faq->description,0,55)."..." }}</td>
                <td>{{ $faq->created_at }}</td>
                @role('editor')
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('faq.destroy',[$faq->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('faq.edit',[$faq->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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