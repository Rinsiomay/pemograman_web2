@extends('layout')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Pengguna</h1>
        <a href="/tambah-user" class="btn btn-primary">Tambah User</a>
    </div>

    <ul class="list-group">
        @foreach ($users_di_view as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $user->name }}
                    <small class="text-muted">({{ $user->email }})</small>
                </div>
                <div>
                    <a href="/user/{{ $user->id }}/edit" class="btn btn-sm btn-warning">
                        Edit
                    </a>

                    <form action="/user/{{ $user->id }}" method="POST" style="display: inline-block; margin-left: 5px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

@endsection