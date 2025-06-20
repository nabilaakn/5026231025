@extends('template') {{-- Ubah sesuai template header/footer kamu --}}

@section('content')
<div class="container">
    <h4>Pilih Kategori</h4>
    <form action="/combo" method="post">
        @csrf
        <select name="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
        <button type="submit">KIRIM</button>
    </form>
</div>
@endsection
