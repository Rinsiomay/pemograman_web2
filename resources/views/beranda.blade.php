@extends('layout')
@section('content')

    <div class="hero mb-4 animate-zoom-in">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
            <div>
                <div class="title h3 mb-1">Kelola Pengguna</div>
                <div class="subtitle">Tambah, edit, dan hapus pengguna dengan mudah</div>
            </div>
            <div class="text-end">
                <div class="small text-uppercase subtle-text">Total Pengguna</div>
                <div class="display-6">{{ count($users_di_view) }}</div>
            </div>
        </div>
        <div class="d-flex gap-2 mt-3">
            <a href="/tambah-user" class="btn btn-primary">
                <i class="bi bi-person-plus me-1"></i>
                Tambah User
            </a>
        </div>
    </div>

    <div class="row g-3 align-items-center mb-3">
        <div class="col-md-6">
            <div class="searchbar">
                <i class="bi bi-search"></i>
                <input id="searchInput" type="text" class="form-control" placeholder="Cari nama atau email...">
            </div>
        </div>
    </div>

    <ul id="userList" class="list-group" data-stagger>
        @foreach ($users_di_view as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="avatar">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div>
                        <div class="fw-semibold">{{ $user->name }}</div>
                        <div class="subtle-text small">{{ $user->email }}</div>
                    </div>
                </div>
                <div class="d-inline-flex gap-2">
                    <a href="/user/{{ $user->id }}/edit" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil-square me-1"></i>
                        Edit
                    </a>

                    <form action="/user/{{ $user->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash me-1"></i>
                            Delete
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <script>
        (function(){
            const input = document.getElementById('searchInput');
            const list = document.getElementById('userList');
            if(!input || !list) return;
            const items = Array.from(list.querySelectorAll('li'));
            input.addEventListener('input', function(){
                const q = this.value.toLowerCase();
                items.forEach(li => {
                    const text = li.innerText.toLowerCase();
                    li.style.display = text.includes(q) ? '' : 'none';
                });
            });
        })();
    </script>

@endsection
