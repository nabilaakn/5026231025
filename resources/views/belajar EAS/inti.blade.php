@extends('template')

@section('content')
<div class="container">
    @if(session('success'))
      <div style="color:green">{{ session('success') }}</div>
    @endif
    <table border="1" cellpadding="5">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
        @foreach($pekerja as $p)
        <tr>
            <td>{{ $p->kodepegawai }}</td>
            <td>{{ strtoupper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }}</td>
            <td>
                <a href="/pekerja/hapus/{{ $p->kodepegawai }}" onclick="return confirm('Hapus data?')">Hapus Data</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/pekerja/input">Tambah Data</a>
</div>
@endsection
