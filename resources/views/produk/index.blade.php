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

<p>
<a href="{{route('produk.create')}}">
    Tambah Produk
</a>
</p>

@session('success')
<p style="color:blueviolet;">
    {{ session('success') }}
</p>
@endsession

<table border="1" cellpadding="5" style="width: 50%; border-collapse: collapse;">
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
                    <a href="{{ route('produk.show', $produk->id) }}"
                        style="background: #28a745; color: white; padding: 5px 10px;
                        border-radius: 3px; text-decoration: none; display: inline-block; margin-right: 5px;">
                        Lihat Detail
                    </a>

                    <a href="{{ route('produk.edit', $produk->id) }}"
                        style="background: #007bff; color: white; padding: 5px 10px;
                        border-radius: 3px; text-decoration: none; display: inline-block; margin-right: 5px">
                        Edit
                    </a>

                    <form action="{{ route('produk.destroy', $produk->id) }}"
                        method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"
                        style="background: #dc3545; color: white; border: none; padding: 5px 10px;
                        border-radius: 3px; cursor: pointer;">
                         Hapus
                        </button>
                    </form>

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
