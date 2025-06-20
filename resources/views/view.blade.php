@extends('template')

@section('content')
<div class="container">
    <h3>View Data Karyawan</h3>
    <table>
        <tr>
            <td><b>Kode Pegawai</b></td>
            <td><input type="text" value="{{ $m->kodepegawai }}" readonly></td>
        </tr>
        <tr>
            <td><b>Nama Lengkap</b></td>
            <td><input type="text" value="{{ ucwords($m->namalengkap) }}" readonly></td>
        </tr>
        <tr>
            <td><b>Divisi</b></td>
            <td><input type="text" value="{{ $m->divisi }}" readonly></td>
        </tr>
        <tr>
            <td><b>Departemen</b></td>
            <td><input type="text" value="{{ $m->departemen }}" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="/eas">Kembali ke Index</a></td>
        </tr>
    </table>
</div>
@endsection
