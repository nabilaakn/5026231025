@extends('template')

@section('content')
<h3>Data Karyawan</h3>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Kode Pegawai</th>
      <th>Nama</th>
      <th>Divisi</th>
      <th>Departemen</th>
      <th>Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($karyawan as $k)
    <tr>
      <td>{{ $k->kodepegawai }}</td>
      <td class="text-uppercase">{{ $k->namalengkap }}</td>
      <td>{{ $k->divisi }}</td>
      <td class="text-lowercase">{{ $k->departemen }}</td>
      <td>
        <a href="{{ url('/karyawan/hapus/'.$k->kodepegawai) }}"
           class="btn btn-danger btn-sm"
           onclick="return confirm('Yakin mau dihapus?')">
          Hapus
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ url('/karyawan/tambah') }}" class="btn btn-primary">
  + Tambah Karyawan Baru
</a>
@endsection
