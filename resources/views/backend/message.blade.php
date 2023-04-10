@extends('layouts.app')

@section('content')
@section('title')
    <title>Mesajlar</title>
@endsection
<div class="table-responsive">    
    <h1>Mesaj cədvəli</h1>
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Ad</th>
                <th>Email</th>
                <th>Mövzu</th>
                <th>Açıqlama</th>
                <th>Tarix</th>
                @role('destroyer')
                    <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $i=>$message)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ mb_substr($message->description,0,55)."..." }}</td>
                <td>{{ $message->created_at }}</td>
                @role('destroyer')
                    <td>
                        <form action="{{ route('message.destroy',[$message->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="btn-group">
                                <a href="{{ route('message.show',[$message->id]) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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