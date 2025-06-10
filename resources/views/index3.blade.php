@extends('template')

@section('content')
<h3>Data Bolpen</h3>

<a href="/bolpen/tambah">+ Tambah Bolpen Baru</a>
<br><br>

{{-- Form Search --}}
<form action="/bolpen/cari" method="GET" class="form-inline mb-3">
    <input type="text" name="cari" class="form-control mr-2" placeholder="Cari merk bolpen..."
        value="{{ request('cari') }}">
    <button type="submit" class="btn btn-info"><i class="fas fa-search"></i> Cari</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bolpen as $b)
        <tr>
            <td>{{ $b->merkbolpen }}</td>
            <td>{{ $b->hargabolpen }}</td>
            <td>{{ $b->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $b->berat }}</td>
            <td>
                <a href="/bolpen/edit/{{ $b->ID }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/bolpen/hapus/{{ $b->ID }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
