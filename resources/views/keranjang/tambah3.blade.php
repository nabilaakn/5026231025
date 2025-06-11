@extends('template')

@section('content')
<h3>Tambah ke Keranjang</h3>
<a href="/keranjang" class="btn btn-secondary">Kembali</a><br><br>

<form method="POST" action="/keranjang/store">
    @csrf
    <div class="form-group">
        <label>Kode Barang</label>
        <input type="number" name="kodebarang" required class="form-control">
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah" required class="form-control">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" required class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Beli</button>
</form>
@endsection
