@extends('layouts.app')

@section('content')
@section('title')
<title>İstifadəçilər və icazələr</title>
@endsection

<div class="table-responsive">
    <h1>İstifadəçi və icazə cədvəli</h1>
    <a href="{{ route('permission.create') }}" class="btn btn-primary mb-3">Əlavə et</a>
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>İstifadəçi</th>
                <th>İcazə</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $i=>$user)
            <tr>
                <td>{{ $i+=1}}</td>
                <td>
                    <div class="d-flex justify-content-left align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3">
                                <span class="avatar-initial rounded-circle 
                                    bg-label-dark">
                                    <img src="{{ url($user->image) }}">
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-body text-truncate">
                                <span class="fw-semibold">{{ $user->name }}</span>
                            </a>
                            <small class="text-muted">{{ $user->email }}</small>
                        </div>
                    </div>
                </td>
                <td>
                    @foreach ($user->getRoleNames() as $role)
                        {{ $role.',' }}
                    @endforeach
                </td>
                <td>{{ $user->created_at }}</td>
                <td>
                    @if($user->email!=='serfelicap_admin@gmail.com')
                    <form action="{{ route('permission.destroy',[$user->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <a href="{{ route('permission.show',[$user->id]) }}" class="btn btn-success"
                                title="İcazə ver">
                                <i class="bi bi-person-gear"></i>
                            </a>
                            <button type="submit" class="btn btn-danger" title="Sil">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
