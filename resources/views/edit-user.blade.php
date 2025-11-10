@extends('layout')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Edit User</h1>
    <a href="/" class="btn btn-secondary">Batal</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="/user/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="/" class="btn btn-outline-secondary">Back to Beranda</a>
            </div>
        </form>
    </div>
</div>

@endsection