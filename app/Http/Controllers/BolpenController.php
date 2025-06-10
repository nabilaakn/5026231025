<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenController extends Controller
{
    public function index3() {
        $bolpen = DB::table('bolpen')->get();
        return view('index3', ['bolpen' => $bolpen]);
    }

    public function tambah2() {
        return view('tambah2');
    }

    public function store(Request $request) {
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);
        return redirect('/bolpen');
    }

    public function edit2($ID) {
        $bolpen = DB::table('bolpen')->where('ID', $ID)->first();
        return view('edit2', ['bolpen' => $bolpen]);
    }

    public function update(Request $request) {
        DB::table('bolpen')->where('ID', $request->ID)->update([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);
        return redirect('/bolpen');
    }

    public function hapus($ID) {
        DB::table('bolpen')->where('ID', $ID)->delete();
        return redirect('/bolpen');
    }

    public function cari(Request $request)
{
    // Menangkap data pencarian
    $cari = $request->cari;

    // Query: cari data bolpen yang merk-nya sesuai input
    $bolpen = DB::table('bolpen')
        ->where('merkbolpen', 'like', '%' . $cari . '%')
        ->paginate();

    // Kirim ke view dengan hasil pencarian
    return view('index3', ['bolpen' => $bolpen, 'cari' => $cari]);
}

}


