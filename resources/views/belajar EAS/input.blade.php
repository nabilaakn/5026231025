@extends('template')

@section('content')
<div class="container">
    @if(session('error'))
      <div style="color:red">{{ session('error') }}</div>
    @endif
    <form method="post" action="/pekerja/store">
        @csrf
        <table>
            <tr>
                <td>Kode Pegawai</td>
                <td><input type="text" name="kodepegawai" maxlength="5" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" required></td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td><input type="text" name="divisi" maxlength="20" required></td>
            </tr>
            <tr>
                <td>Departemen</td>
                <td><input type="text" name="departemen" maxlength="20" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection
