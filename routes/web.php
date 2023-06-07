<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengembanganController;
use App\Http\Controllers\TunjanganController;
use App\Http\Controllers\SessionController;

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
Route::get('/', [SessionController::class, 'index']);
Route::post('/login/proses', [SessionController::class, 'login']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::get('/daftar', [SessionController::class, 'register']);
Route::post('/daftar/proses', [SessionController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'create']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/{id_pegawai}/edit',[PegawaiController::class,'edit']);
Route::put('/pegawai/{id_pegawai}',[PegawaiController::class,'update']);
Route::get('/pegawai/{id_pegawai}/hapus',[PegawaiController::class,'delete']);
Route::get('/pegawai/{id_pegawai}/destroy',[PegawaiController::class,'destroy']);
Route::get('/pegawai/cetak',[PegawaiController::class,'cetakPegawai']);

Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/pengguna/tambah',[PenggunaController::class,'create']);
Route::post('/pengguna/store',[PenggunaController::class,'store']);
Route::get('/pengguna/{id_pengguna}/edit',[PenggunaController::class,'edit']);
Route::put('/pengguna/{id_pengguna}',[PenggunaController::class,'update']);
Route::get('/pengguna/{id_pengguna}/hapus',[PenggunaController::class,'delete']);
Route::get('/pengguna/{id_pengguna}/destroy',[PenggunaController::class,'destroy']);

Route::get('/absensi',[AbsensiController::class,'index']);
Route::get('/absensi/tambah',[AbsensiController::class,'create']);
Route::post('/absensi/store',[AbsensiController::class,'store']);
Route::get('/absensi/{id_absensi}/edit',[AbsensiController::class,'edit']);
Route::put('/absensi/{id_absensi}',[AbsensiController::class,'update']);
Route::get('/absensi/{id_absensi}/hapus',[AbsensiController::class,'delete']);
Route::get('/absensi/{id_absensi}/destroy',[AbsensiController::class,'destroy']);
Route::get('/absensi/cetak',[AbsensiController::class,'cetakAbsensi']);

Route::get('/pengajuan',[PengajuanController::class,'index']);
Route::get('/pengajuan/tambah',[PengajuanController::class,'create']);
Route::post('/pengajuan/store',[PengajuanController::class,'store']);
Route::get('/pengajuan/{id_pengajuan}/edit',[PengajuanController::class,'edit']);
Route::put('/pengajuan/{id_pengajuan}',[PengajuanController::class,'update']);
Route::get('/pengajuan/{id_pengajuan}/hapus',[PengajuanController::class,'delete']);
Route::get('/pengajuan/{id_pengajuan}/destroy',[PengajuanController::class,'destroy']);

Route::get('/ijin',[IjinController::class,'index']);
Route::get('/ijin/tambah',[IjinController::class,'create']);
Route::post('/ijin/store',[IjinController::class,'store']);
Route::get('/ijin/{id_ijin}/edit',[IjinController::class,'edit']);
Route::put('/ijin/{id_ijin}',[IjinController::class,'update']);
Route::get('/ijin/{id_ijin}/hapus',[IjinController::class,'delete']);
Route::get('/ijin/{id_ijin}/destroy',[IjinController::class,'destroy']);

Route::get('/pengembangan',[PengembanganController::class,'index']);
Route::get('/pengembangan/tambah',[PengembanganController::class,'create']);
Route::post('/pengembangan/store',[PengembanganController::class,'store']);
Route::get('/pengembangan/{id_pengembangan}/edit',[PengembanganController::class,'edit']);
Route::put('/pengembangan/{id_pengembangan}',[PengembanganController::class,'update']);
Route::get('/pengembangan/{id_pengembangan}/hapus',[PengembanganController::class,'delete']);
Route::get('/pengembangan/{id_pengembangan}/destroy',[PengembanganController::class,'destroy']);

Route::get('/pendidikan',[PendidikanController::class,'index']);
Route::get('/pendidikan/tambah',[PendidikanController::class,'create']);
Route::post('/pendidikan/store',[PendidikanController::class,'store']);
Route::get('/pendidikan/{id_pendidikan}/edit',[PendidikanController::class,'edit']);
Route::put('/pendidikan/{id_pendidikan}',[PendidikanController::class,'update']);
Route::get('/pendidikan/{id_pendidikan}/hapus',[PendidikanController::class,'delete']);
Route::get('/pendidikan/{id_pendidikan}/destroy',[PendidikanController::class,'destroy']);

Route::get('/gaji',[GajiController::class,'index']);
Route::get('/gaji/tambah',[GajiController::class,'create']);
Route::post('/gaji/store',[GajiController::class,'store']);
Route::get('/gaji/{id_gaji}/edit',[GajiController::class,'edit']);
Route::put('/gaji/{id_gaji}',[GajiController::class,'update']);
Route::get('/gaji/{id_gaji}/hapus',[GajiController::class,'delete']);
Route::get('/gaji/{id_gaji}/destroy',[GajiController::class,'destroy']);
Route::get('/gaji/cetak',[GajiController::class,'cetakGaji']);

Route::get('/tunjangan',[TunjanganController::class,'index']);
Route::get('/tunjangan/tambah',[TunjanganController::class,'create']);
Route::post('/tunjangan/store',[TunjanganController::class,'store']);
Route::get('/tunjangan/{id_tunjangan}/edit',[TunjanganController::class,'edit']);
Route::put('/tunjangan/{id_tunjangan}',[TunjanganController::class,'update']);
Route::get('/tunjangan/{id_tunjangan}/hapus',[TunjanganController::class,'delete']);
Route::get('/tunjangan/{id_tunjangan}/destroy',[TunjanganController::class,'destroy']);


