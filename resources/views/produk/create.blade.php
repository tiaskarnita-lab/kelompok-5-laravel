@extends('layouts.app')

@section('content')
<h3>Tambah Produk</h3>

<form action="{{ route('produk.store') }}" method="POST">
    @csrf

    <label>Nama Produk:</label><br>
    <input type="text" name="nama_produk" style="width: 1100px;">
    <br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" style="width: 1100px;">
    <br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok" style="width: 1100px;">
    <br><br>

    <button type="submit">Simpan</button>
</form>
<br>
<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>
@endsection
