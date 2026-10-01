@extends('layouts.app')

@section('content')

<h1>Buat Kategori</h1>

<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Nama Kategori" name="nama_kategori">
    <button type="submit">
        Simpan
    </button>
</form>

<p>
    <a href="{{ route('kategori.index') }}">
        Kembali
    </a>
</p>
@endsection
