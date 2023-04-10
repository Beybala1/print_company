@extends('layouts.app')

@section('content')
@section('title')
    <title>Sosial şəbəkələr</title>
@endsection
<div class="table-responsive">    
    <h1>Sosial şəbəkələr cədvəli</h1>
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Sosial şəbəkə</th>
                <th>Link</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($socials as $i=>$social)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $social->title }}</td>
                <td>{{ mb_substr($social->link,0,55)."..." }}</td>
                <td>{{ $social->created_at }}</td>
                @role('editor')
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('social.destroy',[$social->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('social.edit',[$social->id],'edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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