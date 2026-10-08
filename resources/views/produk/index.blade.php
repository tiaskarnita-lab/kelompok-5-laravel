@extends('layouts.app')

@section('content')
<style>
    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(odd) {
        background-color: white;
    }
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
    }
</style>
<h4>Daftar Produk</h4>

<table border="1" cellpadding="10"
style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($produks as $produk)
            <tr>
                <td>{{ $produk->id}}</td>
                <td>{{ $produk['nama_produk'] }}</td>
                <td>
                    {{ number_format($produk->harga) }}
                </td>
                <td>
                    {{ $produk->stok }}
                </td>
                    <td>
                    <a href="{{ route('produk.show', $produk->id) }}">
                        Lihat Detail
                    </a>
                </td>
            </tr>
            @empty
            <tr>
        <td colspan="5">
            Data produk belum tersedia.
        </td>
    </tr>

@endforelse

    </tbody>
</table>
<div style="margin-top: 20px;">
    {{ $produks->links() }}
</div>

<style>
    nav[role="navigation"] svg {
        width: 20px !important;
        height: 20px !important;
    }
</style>

@endsection
