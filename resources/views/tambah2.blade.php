@extends('template')

@section('content')
<h3>Tambah Data Bolpen</h3>

<a href="/bolpen"> Kembali</a>
<br /><br />

<form action="/bolpen/store" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-3">Merk Bolpen</div>
        <div class="col-8">
            <input type="text" name="merkbolpen" required class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-3">Harga</div>
        <div class="col-8">
            <input type="number" name="hargabolpen" required class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-3">Tersedia</div>
        <div class="col-8">
            <input type="checkbox" name="tersedia" value="1"> Tersedia
        </div>
    </div>
    <div class="row">
        <div class="col-3">Berat (kg)</div>
        <div class="col-8">
            <input type="number" name="berat" step="0.01" required class="form-control">
        </div>
    </div>
    <br />
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endsection
