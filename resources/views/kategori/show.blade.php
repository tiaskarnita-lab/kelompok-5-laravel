@extends('layouts.app')

@section('content')

<h1>Detil Kategori</h1>

<p>
    Nama Kategori : {{ $kategori['nama_kategori'] }}
</p>

<p>
    <a href="{{ route('kategori.index') }}">
        Kembali
    </a>
</p>
@endsection
