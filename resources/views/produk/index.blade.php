@extends('layouts.app')

@section('content')

<h4>Daftar Produk</h4>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($produks as $key => $produk)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $produk['nama_produk'] }}</td>
                <td>
                    {{ number_format($produk['harga']) }}
                </td>
                <td>
                    <a href="{{ route('produk.show', $key)}}">
                        Lihat Detail
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
