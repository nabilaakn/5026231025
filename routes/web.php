<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BolpenController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\MyKaryawanController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('tugas1', function () {
	return view('pertama');
});
Route::get('tugas2', function () {
	return view('Layout1(5026231025)');
});
Route::get('tugas3', function () {
	return view('Tugas3');
});
Route::get('tugas4', function () {
	return view('js1');
});
Route::get('tugas5', function () {
	return view('js2');
});
Route::get('tugas6', function () {
	return view('js3');
});
Route::get('tugas7', function () {
	return view('TugasLinktree');
});
Route::get('ETS', function () {
	return view('index');
});
Route::get('frontend', function () {
	return view('frontend');
});
Route::get('dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [Pegawai2Controller::class,'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class,'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class,'index2']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit'] );
Route::post('/pegawai/update', [PegawaiController::class,'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class,'cari']);

// routes/web.php
Route::get('/bolpen', [BolpenController::class, 'index3']);
Route::get('/bolpen/tambah', [BolpenController::class, 'tambah2']);
Route::post('/bolpen/store', [BolpenController::class, 'store']);
Route::get('/bolpen/edit/{id}', [BolpenController::class, 'edit2']);
Route::post('/bolpen/update', [BolpenController::class, 'update']);
Route::get('/bolpen/hapus/{id}', [BolpenController::class, 'hapus']);
Route::get('/bolpen/cari', [BolpenController::class, 'cari']);

// Route keranjang
Route::get('/keranjang', [KeranjangController::class, 'index4']);
Route::get('/keranjang/tambah', [KeranjangController::class, 'tambah3']);
Route::post('/keranjang/store', [KeranjangController::class, 'store']);
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'destroy']);

// Route karyawan
Route::get('/karyawan', [KaryawanController::class, 'indexkaryawan']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// AA-chat
Route::get('/chat', [ChatController::class, 'index']);

//CC-kategori
Route::get('/combo', [KategoriController::class, 'index']);
Route::post('/combo', [KategoriController::class, 'submit']);

// BB-mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/view/{nrp}', [MahasiswaController::class, 'view']);
Route::get('/mahasiswa/edit/{nrp}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{nrp}', [MahasiswaController::class, 'update']);

// FF-COUNTER
use App\Http\Controllers\CounterController;
Route::get('/counter', [CounterController::class, 'index']);

//DD- pekerja
Route::get('/pekerja', [PekerjaController::class, 'index']);
Route::get('/pekerja/input', [PekerjaController::class, 'input']);
Route::post('/pekerja/store', [PekerjaController::class, 'store']);
Route::get('/pekerja/hapus/{kodepegawai}', [PekerjaController::class, 'hapus']);

//EAS MYKARYAWAN
Route::get('/eas', [MyKaryawanController::class, 'indexmykar']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'editmykar']);
Route::post('/eas/update/{kodepegawai}', [MyKaryawanController::class, 'updatemykar']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view']);
