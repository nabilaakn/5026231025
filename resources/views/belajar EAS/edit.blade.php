<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa - Malas Ngoding Style</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="/mahasiswa/update/{{ $mhs->nrp }}">
        @csrf
        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $mhs->nama }}"><br>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="{{ $mhs->jurusan }}"><br>
        <label>IPK</label><br>
        <input type="text" name="ipk" value="{{ $mhs->ipk }}"><br><br>
        <input type="submit" value="Simpan">
        <a href="/mahasiswa">Batal</a>
    </form>
</body>
</html>

