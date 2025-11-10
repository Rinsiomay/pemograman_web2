@extends('layout')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Edit User</h1>
    <a href="/" class="btn btn-secondary">Batal</a>
</div>

<div class="card hover-lift animate-zoom-in">
    <div class="card-body p-4">
        <form action="/user/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>
                    Update User
                </button>
                <a href="/" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>
                    Back to Beranda
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
