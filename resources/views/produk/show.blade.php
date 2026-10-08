@extends('layouts.app')

@section('content')

<h1>Detail Produk</h1>

<Stok>
    Nama Produk : {{ $produk['nama_produk'] }} <br>
    Harga : {{ number_format($produk['harga']) }} <br>
    Stok : {{$produk->stok}}</Stok>
<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>
@endsection
