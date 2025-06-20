<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa - Malas Ngoding Style</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="/">Home</a> | <a href="/mahasiswa">Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nrp }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>{{ $m->ipk }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $m->nrp }}">Edit</a> |
                <a href="/mahasiswa/view/{{ $m->nrp }}">View</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
