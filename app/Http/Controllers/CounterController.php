<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // Increment counter dulu, baru baca dan tampilkan!
        DB::table('counter')->where('ID', 1)->increment('Jumlah');
        $jumlah = DB::table('counter')->where('ID', 1)->value('Jumlah');
        // Pass ke view
        return view('belajar EAS.counter', ['jumlah' => $jumlah]);
    }
}
