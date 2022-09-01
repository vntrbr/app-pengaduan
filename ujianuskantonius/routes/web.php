<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputAspirasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('barang','BarangController');
Route::resource('kategori','KategoriController');
Route::resource('penduduk','PendudukController');
Route::resource('input','InputAspirasiController');
Route::resource('aspirasi','AspirasiController');
Route::resource('status','StatusController');
Route::resource('riwayat','RiwayatController');
Route::resource('responaspirasi','ResponController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [InputAspirasiController::class, 'search'])->name('search');
