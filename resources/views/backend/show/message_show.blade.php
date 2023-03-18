@extends('layouts.app')

@section('content')

@section('title')
<title>Mesajlar</title>
@endsection

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Mesajlara baxış</h5>
            </div>
            <div class="card-body">
                Ad: {{ $message->name }}<br><br>
                Email: {{ $message->email }}<br><br>
                Mövzu: {{ $message->subject }}<br><br>
                Açıqlama: {{ $message->content }}<br><br>
                <a href="mailto:{{ $message->email }}" class="btn btn-primary">Cavabla</a>
                <a href="{{ route('message.index') }}" class="btn btn-danger">Ləğv et</a>
            </div>
        </div>
    </div>
</div>
@endsection
