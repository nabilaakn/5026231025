@extends('template')

@section('content')
<div class="container">
    <h3>Edit Data Karyawan</h3>
    <form method="post" action="/eas/update/{{ $m->kodepegawai }}">
        @csrf
        <table>
            <tr>
                <td><b>Kode Pegawai</b></td>
                <td><input type="text" name="kodepegawai" value="{{ $m->kodepegawai }}" readonly></td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td><input type="text" name="namalengkap" value="{{ $m->namalengkap }}" required></td>
            </tr>
            <tr>
                <td><b>Divisi</b></td>
                <td><input type="text" name="divisi" value="{{ $m->divisi }}" required maxlength="5"></td>
            </tr>
            <tr>
                <td><b>Departemen</b></td>
                <td><input type="text" name="departemen" value="{{ $m->departemen }}" required maxlength="10"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan Perubahan</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection
