<?php

use Illuminate\Support\Facades\Route;

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
