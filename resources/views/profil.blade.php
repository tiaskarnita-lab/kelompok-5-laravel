<!DOCTYPE html>
<html>
<head>
    <title>Profil Kelompok</title>
</head>
<body>
    <h2>Kelompok 6</h2>
    <p>Nama Anggota:</p>
    @foreach($anggota as $nama)
        <div class="nama">{{$nama}}</div>
    @endforeach
    <br>
    <div class="kelas">{{$kelas}}</div>

</body>
</html>
