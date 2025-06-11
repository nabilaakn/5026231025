@extends('template')

@section('content')
<h3>Data Keranjang Belanja</h3>
<a href="/keranjang/tambah" class="btn btn-primary">+ Beli</a><br><br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $grandTotal = 0; @endphp
        @foreach($data as $d)
        @php
            $total = $d->jumlah * $d->harga;
            $grandTotal += $total;
        @endphp
        <tr>
            <td>PB{{ str_pad($d->id, 3, '0', STR_PAD_LEFT) }}</td>
            <td>{{ $d->kodebarang }}</td>
            <td>{{ $d->jumlah }}</td>
            <td>Rp {{ number_format($d->harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjang/hapus/{{ $d->id }}" class="btn btn-danger btn-sm">Batal</a>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4" class="text-right font-weight-bold">Total Semua</td>
            <td colspan="2"><strong>Rp {{ number_format($grandTotal, 0, ',', '.') }}</strong></td>
        </tr>
    </tbody>
</table>


@endsection
