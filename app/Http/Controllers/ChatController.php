<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // Ambil pesan pertama dari tabel chat
        $chat = DB::table('chat')->first();

        // Kirim pesan ke view
        return view('belajar EAS.chat', ['pesan' => $chat ? $chat->pesan : '']);
    }
}
