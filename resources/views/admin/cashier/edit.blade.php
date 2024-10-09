@extends('layouts.app')

@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <!-- Mulai Copy -->
        <div class="flex-centerbetween mb-4">
            <h2 class="text-dark fw-bold mb-0">Edit Kasir</h2>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <form action="{{ route('cashiers.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}"
                            autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control" id="username"
                            value="{{ $user->username }}">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary" type="submit">
                            <i class="bx bx-save"></i> Simpan Baru
                        </button>
                        <a href="{{ route('cashiers.index') }}" class="btn btn-light">
                            <i class="bx bx-arrow-back"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Batas Copy -->
    </section>
@endsection
