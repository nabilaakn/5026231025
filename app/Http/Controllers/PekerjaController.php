<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaController extends Controller
{
    // Halaman Inti (Tabel)
    public function index()
    {
        $pekerja = DB::table('karyawan')->get();
        return view('belajar EAS.inti', compact('pekerja'));
    }

    // Form Input Data
    public function input()
    {
        return view('belajar EAS.input');
    }

    // Proses Simpan
    public function store(Request $request)
    {
        // Validasi kodepegawai tidak boleh sama (cek di DB)
        $ada = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->first();
        if ($ada) {
            return redirect('/pekerja/input')->with('error', 'Kode Pegawai sudah ada di tabel!');
        }
        // Simpan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen,
        ]);
        return redirect('/pekerja')->with('success', 'Data berhasil ditambahkan');
    }

    // Hapus Data
    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/pekerja')->with('success', 'Data berhasil dihapus');
    }
}
