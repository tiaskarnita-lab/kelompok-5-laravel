@extends('layouts.app')

@section('content')

<h1>Daftar Kategori</h1>

<p>
    <a href="{{ route('kategori.create') }}">
        Buat Kategori Baru
    </a>
</p>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($kategoris as $key => $kategori)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $kategori['nama_kategori'] }}</td>
                <td>
                    <a href="{{ route('kategori.show', $key) }}">
                        Detil
                    </a> |

                    <a href="{{ route('kategori.edit', $key) }}">
                        Edit
                    </a> |

                    <form action="{{ route('kategori.destroy', $key) }}"
                          method="post"
                          style="display: inline; margin: 0;">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
