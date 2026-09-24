<h1>Ubah Kategori</h1>

<form action="{{ route('kategori.update', $id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Nama Kategori"
        name="nama_kategori" value="{{ $kategori['nama_kategori'] }}">
    <button type="submit">
        Update
    </button>
</form>

<p>
    <a href="{{ route('kategori.index') }}">
        Kembali
    </a>
</p>
