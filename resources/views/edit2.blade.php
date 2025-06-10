<!DOCTYPE html>
<html>
<head>
    <title>Edit Bolpen</title>
</head>
<body>

    <h3>Edit Bolpen</h3>
    <a href="/bolpen">Kembali</a>
    <br /><br />

    <form action="/bolpen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $bolpen->ID }}">

        Merk Bolpen: <input type="text" name="merkbolpen" value="{{ $bolpen->merkbolpen }}" required><br>

        Harga: <input type="number" name="hargabolpen" value="{{ $bolpen->hargabolpen }}" required><br>

        Tersedia: <input type="checkbox" name="tersedia" value="1" {{ $bolpen->tersedia ? 'checked' : '' }}> Tersedia<br>

        Berat: <input type="number" step="0.01" name="berat" value="{{ $bolpen->berat }}" required><br>

        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>
