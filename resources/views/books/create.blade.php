<h2>Tambah Buku</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label>Kategori</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->nama_kategori }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Judul</label>
    <input type="text" name="judul"><br><br>

    <label>Penulis</label>
    <input type="text" name="penulis"><br><br>

    <label>Tahun</label>
    <input type="number" name="tahun_terbit"><br><br>

    <label>Stok</label>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>