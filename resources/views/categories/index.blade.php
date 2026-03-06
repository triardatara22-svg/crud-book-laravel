@extends('layout')

@section('content')

<h3 class="mb-3">Data Kategori</h3>

<a href="{{ route('categories.create') }}" 
   class="btn text-white mb-3" 
   style="background:#ff66b2;">+ Tambah</a>

<table class="table table-bordered bg-white">
    <thead style="background:#ff1493;color:white;">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Total Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $cat)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cat->nama_kategori }}</td>
            <td>
                <span class="badge bg-info">
                    {{ $cat->books->count() }}
                </span>
            </td>
            <td>
                <a href="{{ route('categories.edit',$cat->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('categories.destroy',$cat->id) }}" method="POST" style="display:inline;">
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