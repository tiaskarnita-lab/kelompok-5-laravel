<h1>Detil Produk</h1>

<p>
    Nama Produk : {{ $produk['nama_produk'] }} <br>
    Harga : {{ number_format($produk['harga']) }}
</p>

<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>
