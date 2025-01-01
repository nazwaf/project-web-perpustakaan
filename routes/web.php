<?php

use App\Models\Rak;
use App\Models\Buku;
use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Kembali;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RakController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KembaliController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdministrasiController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('buku', BukuController::class);
Route::get('buku/laporan/cetak', [BukuController::class, 'laporan']);
Route::get('buku/laporan/data', [BukuController::class, 'cari']);

Route::resource('anggota', AnggotaController::class);
Route::get('anggota/laporan/cetak', [AnggotaController::class, 'laporan']);
Route::get('anggota/laporan/data', [AnggotaController::class, 'cari']);

Route::resource('kategori', KategoriController::class);
Route::get('kategori/laporan/cetak', [KategoriController::class, 'laporan']);
Route::get('kategori/laporan/data', [KategoriController::class, 'cari']);

Route::resource('pinjam', PinjamController::class);
Route::get('pinjam/laporan/cetak', [PinjamController::class, 'laporan']);
Route::get('pinjam/laporan/data', [PinjamController::class, 'cari']);

Route::resource('kembali', KembaliController::class);
Route::get('kembali/laporan/cetak', [KembaliController::class, 'laporan']);
Route::get('kembali/laporan/data', [KembaliController::class, 'cari']);

Route::resource('rak', RakController::class);
Route::get('rak/laporan/data', [RakController::class, 'cari']);

Route::resource('administrasi', AdministrasiController::class);
Route::get('administrasi/laporan/cetak', [AdministrasiController::class, 'laporan']);

Route::get('/profil', function () {
    return view('profil_index');
});
