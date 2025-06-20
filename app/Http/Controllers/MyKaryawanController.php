<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    // Index - tampil semua data
    public function indexmykar()
    {
        $karyawan = DB::table('mykaryawan')->get();
        return view('indexmykar', compact('karyawan'));
    }

    // Edit Form
    public function editmykar($kodepegawai)
    {
        $m = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('editmykar', compact('m'));
    }

    // Proses Update
    public function updatemykar(Request $request, $kodepegawai)
    {
        DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen,
        ]);
        return redirect('/eas')->with('success', 'Perubahan berhasil disimpan!');
    }

    // View - Read Only
    public function view($kodepegawai)
    {
        $m = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('view', compact('m'));
    }
}
