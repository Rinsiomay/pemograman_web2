@extends('layout')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tambah User</h1>
    <a href="/" class="btn btn-secondary">Kembali</a>
</div>

<div class="card hover-lift animate-zoom-in">
    <div class="card-body p-4">
        <form action="/tambah-user" method="post">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i>
                    Tambah User
                </button>
                <a href="/" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
