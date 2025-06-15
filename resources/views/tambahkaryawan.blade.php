@extends('template')

@section('content')
<h3>Tambah Karyawan</h3>
<a href="{{ url('/karyawan') }}" class="btn btn-secondary mb-3">Kembali</a>

<form action="{{ url('/karyawan/store') }}" method="post" class="row g-3">
  @csrf

  <div class="col-md-3">
    <label for="kodepegawai" class="form-label">Kode Pegawai</label>
    <input type="text"
           id="kodepegawai" name="kodepegawai"
           value="{{ old('kodepegawai') }}"
           class="form-control @error('kodepegawai') is-invalid @enderror">
    @error('kodepegawai')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text"
           id="nama" name="nama"
           value="{{ old('nama') }}"
           class="form-control @error('nama') is-invalid @enderror">
    @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-3">
    <label for="divisi" class="form-label">Divisi (5 char)</label>
    <input type="text"
           id="divisi" name="divisi"
           value="{{ old('divisi') }}"
           class="form-control @error('divisi') is-invalid @enderror">
    @error('divisi')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-3">
    <label for="departemen" class="form-label">Departemen</label>
    <input type="text"
           id="departemen" name="departemen"
           value="{{ old('departemen') }}"
           class="form-control @error('departemen') is-invalid @enderror">
    @error('departemen')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-success">Simpan Data</button>
  </div>
</form>
@endsection
