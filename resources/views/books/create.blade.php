@extends('layouts.app')

@section('content')
<h1>Tambah Buku</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Kategori</label>
        <select name="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Judul</label>
        <input type="text" name="judul">
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="penulis">
    </div>

    <div>
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit">
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stok">
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection