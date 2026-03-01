@extends('layouts.app')

@section('content')

<h2>Edit Buku</h2>

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Kategori</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $book->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $book->judul }}">
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="penulis" value="{{ $book->penulis }}">
    </div>

    <div>
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}">
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stok" value="{{ $book->stok }}">
    </div>

    <button type="submit">Update</button>
</form>

@endsection