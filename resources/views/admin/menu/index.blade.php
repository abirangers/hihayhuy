@extends('layouts.app')

@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <div class="flex-centerbetween mb-4">
            <h2 class="text-dark fw-bold mb-0">Menu</h2>
            <a href="{{ route('menus.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Tambah Menu
            </a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama Menu</th>
                                <th>Kategori Menu</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($menus as $menu)
                                <tr class="align-middle">
                                    <td>
                                        <img src="{{ asset('storage/' . $menu->image) }}" alt=""
                                            class="rounded object-fit-cover" width="40">
                                    </td>
                                    <td>{{ $menu->name }}</td>
                                    <td>{{ $menu->category->name }}</td>
                                    <td>{{ $menu->price }}</td>
                                    <td>{{ $menu->stock }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-1 ">
                                            <a href="{{ route('menus.edit', $menu->id) }}"
                                                class="btn btn-warning btn-sm py-1 px-3 rounded-1 text-white">
                                                <i class="bx bx-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light btn-sm py-1 px-3 rounded-1">
                                                    <i class="bx bx-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
