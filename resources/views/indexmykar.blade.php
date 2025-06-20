@extends('template')

@section('content')
<div class="container">
    <h3>Data MyKaryawan</h3>
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
        @foreach($karyawan as $p)
        <tr>
            <td>{{ $p->kodepegawai }}</td>
            <td>{{ ucwords($p->namalengkap) }}</td> <!-- Sentence case -->
            <td>{{ $p->divisi }}</td>
            <td>{{ $p->departemen }}</td>
            <td>
                <a href="/eas/edit/{{ $p->kodepegawai }}">Edit</a> |
                <a href="/eas/view/{{ $p->kodepegawai }}">View</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
