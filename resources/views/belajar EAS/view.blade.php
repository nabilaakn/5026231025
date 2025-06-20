<!DOCTYPE html>
<html>
<head>
    <title>View Mahasiswa - Malas Ngoding Style</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <table>
        <tr><td>NRP</td><td>{{ $mhs->nrp }}</td></tr>
        <tr><td>Nama</td><td>{{ $mhs->nama }}</td></tr>
        <tr><td>Jurusan</td><td>{{ $mhs->jurusan }}</td></tr>
        <tr><td>IPK</td><td>{{ $mhs->ipk }}</td></tr>
    </table>
    <br>
    <a href="/mahasiswa">Kembali</a>
</body>
</html>
