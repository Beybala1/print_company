@extends('layouts.app')

@section('content')
@section('title')
<title>Əlaqə məlumatları</title>
@endsection
<div class="table-responsive">
    <h1>Əlaqə məlumatları</h1>
    @role('publisher')
    <a href="{{ route('contact.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    @endrole
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Nömrə-1</th>
                <th>Nömrə-2</th>
                <th>Məkan-1</th>
                <th>Məkan-2</th>
                <th>Tarix</th>
                @role('editor|destroyer')
                <th>Əməliyyatlar</th>
                @endrole
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $i=>$contact)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone_1 }}</td>
                <td>{{ $contact->phone_2 }}</td>
                <td>{{ $contact->place_1 }}</td>
                <td>{{ $contact->place_2 }}</td>
                <td>{{ $contact->created_at }}</td>
                @role('editor')
                <td>
                    <form action="{{ route('contact.destroy',[$contact->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('contact.edit',[$contact->id],'edit') }}" class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            @role('destroyer')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        @endrole
                    </form>
                </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
