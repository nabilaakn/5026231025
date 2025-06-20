<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // READ: Menampilkan semua data mahasiswa
    public function index() {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('belajar EAS.index', ['mahasiswa' => $mahasiswa]);
    }

    // READ: Menampilkan detail mahasiswa (View/READ ONLY)
    public function view($nrp) {
        $mhs = DB::table('mahasiswa')->where('nrp', $nrp)->first();
        return view('belajar EAS.view', ['mhs' => $mhs]);
    }

    // UPDATE: Form edit mahasiswa
    public function edit($nrp) {
        $mhs = DB::table('mahasiswa')->where('nrp', $nrp)->first();
        return view('belajar EAS.edit', ['mhs' => $mhs]);
    }

    // UPDATE: Proses update data
    public function update(Request $request, $nrp) {
        DB::table('mahasiswa')->where('nrp', $nrp)->update([
            'nama'    => $request->nama,
            'jurusan' => $request->jurusan,
            'ipk'     => $request->ipk
        ]);
        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate!');
    }
}
