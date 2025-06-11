<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
     public function index4()
    {
        $data = DB::table('keranjangbelanja')->get();
    //$data = DB::table('keranjangbelanja')->paginate(10);
        return view('keranjang.index4', compact('data'));
    }

    public function tambah3()
    {
        return view('keranjang.tambah3');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        return redirect('/keranjang');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjang');
    }
}
