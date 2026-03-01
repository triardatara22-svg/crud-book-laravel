@extends('layouts.app')

@section('content')

<h3 class="mb-4">Data Book</h3>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card card-gradient p-3">
            <h6>Total Semua Buku</h6>
            <h3>{{ $books->count() }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-gradient-2 p-3">
            <h6>Fiksi</h6>
            <h3>{{ $books->where('category.nama_kategori', 'Fiksi')->count() }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-gradient-2 p-3">
            <h6>Non-Fiksi</h6>
            <h3>{{ $books->where('category.nama_kategori', 'Non-Fiksi')->count() }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-gradient-2 p-3">
            <h6>Sains</h6>
            <h3>{{ $books->where('category.nama_kategori', 'Sains')->count() }}</h3>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>
                <span class="badge badge-stock">
                    {{ $book->stok }}
                </span>
            </td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection