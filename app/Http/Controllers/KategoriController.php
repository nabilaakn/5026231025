<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // Menampilkan form combo box
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('belajar EAS.combo', ['kategori' => $kategori]);
    }

    // Handle submit form
    public function submit(Request $request)
    {
        $id = $request->input('kategori');
        return view('belajar EAS.combo_result', ['id' => $id]);
    }
}
