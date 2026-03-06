@extends('layout')

@section('content')

<h3 class="mb-3">Data Book</h3>

<form method="GET" class="row mb-3">
    <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Cari Judul...">
    </div>

    <div class="col-md-3">
        <select name="category" class="form-control">
            <option value="">-- Semua Kategori --</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <button class="btn text-white" style="background:#ff1493;">Filter</button>
    </div>

    <div class="col-md-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Reset</a>
    </div>

    <div class="col-md-1 text-end">
        <a href="{{ route('books.create') }}" class="btn text-white" style="background:#ff66b2;">+ Tambah</a>
    </div>
</form>

<p><strong>Total Buku (sesuai filter):</strong> {{ $books->count() }}</p>

@foreach($categories as $cat)
    <span class="badge me-1" style="background:#ff66b2;">
        {{ $cat->nama_kategori }} : {{ $cat->books->count() }}
    </span>
@endforeach

<table class="table table-bordered mt-3 bg-white">
    <thead style="background:#ff1493;color:white;">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->category->nama_kategori }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>
                <span class="badge bg-info">{{ $book->stok }}</span>
            </td>
            <td>
                <a href="{{ route('books.edit',$book->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('books.destroy',$book->id) }}" method="POST" style="display:inline;">
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