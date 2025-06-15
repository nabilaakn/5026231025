<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // menampilkan daftar karyawan
    public function indexkaryawan()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('indexkaryawan', compact('karyawan'));
    }

    // form tambah
    public function tambah()
    {
        return view('tambahkaryawan');
    }

    // simpan data baru
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodepegawai' => 'required|string|max:10|unique:karyawan,kodepegawai',
            'nama'        => 'required|string|max:50',
            'divisi'      => 'required|string|size:5',
            'departemen'  => 'required|string|max:10',
        ]);

        // insert termasuk kodepegawai & departemen varchar
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->nama,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen,
        ]);

        return redirect('/karyawan');
    }

    // hapus data
    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('/karyawan');
    }
}
