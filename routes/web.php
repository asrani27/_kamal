<?php

use App\Models\Deviasi;
use App\Models\Dataumum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IkpaController;
use App\Http\Controllers\SkpdController;
use App\Http\Controllers\TkskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\PanganController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RevisiController;
use App\Http\Controllers\DeviasiController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DataumumController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PembiayaanController;
use App\Http\Controllers\PenyerapanController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\AdminRevisiController;
use App\Http\Controllers\AdminDeviasiController;
use App\Http\Controllers\PemeliharaanController;
use App\Http\Controllers\AdminPenyerapanController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);

    Route::get('/superadmin/laporan/bulan', [LaporanController::class, 'bulan']);

    Route::get('/superadmin/dataumum', [DataumumController::class, 'index']);
    Route::get('/superadmin/dataumum/add', [DataumumController::class, 'add']);
    Route::get('/superadmin/dataumum/edit/{id}', [DataumumController::class, 'edit']);
    Route::get('/superadmin/dataumum/delete/{id}', [DataumumController::class, 'delete']);
    Route::post('/superadmin/dataumum/add', [DataumumController::class, 'store']);
    Route::post('/superadmin/dataumum/edit/{id}', [DataumumController::class, 'update']);

    Route::get('/superadmin/komponen', [KomponenController::class, 'index']);
    Route::get('/superadmin/komponen/add', [KomponenController::class, 'add']);
    Route::get('/superadmin/komponen/edit/{id}', [KomponenController::class, 'edit']);
    Route::get('/superadmin/komponen/delete/{id}', [KomponenController::class, 'delete']);
    Route::post('/superadmin/komponen/add', [KomponenController::class, 'store']);
    Route::post('/superadmin/komponen/edit/{id}', [KomponenController::class, 'update']);


    Route::get('/superadmin/pembiayaan', [PembiayaanController::class, 'index']);
    Route::get('/superadmin/pembiayaan/add', [PembiayaanController::class, 'add']);
    Route::get('/superadmin/pembiayaan/edit/{id}', [PembiayaanController::class, 'edit']);
    Route::get('/superadmin/pembiayaan/delete/{id}', [PembiayaanController::class, 'delete']);
    Route::post('/superadmin/pembiayaan/add', [PembiayaanController::class, 'store']);
    Route::post('/superadmin/pembiayaan/edit/{id}', [PembiayaanController::class, 'update']);

    Route::get('/superadmin/program', [ProgramController::class, 'index']);
    Route::get('/superadmin/program/add', [ProgramController::class, 'add']);
    Route::get('/superadmin/program/edit/{id}', [ProgramController::class, 'edit']);
    Route::get('/superadmin/program/delete/{id}', [ProgramController::class, 'delete']);
    Route::post('/superadmin/program/add', [ProgramController::class, 'store']);
    Route::post('/superadmin/program/edit/{id}', [ProgramController::class, 'update']);

    Route::get('/superadmin/transaksi', [TransaksiController::class, 'index']);
    Route::get('/superadmin/transaksi/add', [TransaksiController::class, 'add']);
    Route::get('/superadmin/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
    Route::get('/superadmin/transaksi/delete/{id}', [TransaksiController::class, 'delete']);
    Route::post('/superadmin/transaksi/add', [TransaksiController::class, 'store']);
    Route::post('/superadmin/transaksi/edit/{id}', [TransaksiController::class, 'update']);

    Route::get('/laporan/pilih', [LaporanController::class, 'pilih']);
    Route::get('/laporan/klien/print', [LaporanController::class, 'pdfklien']);
    Route::get('/laporan/dokumen/print', [LaporanController::class, 'pdfdokumen']);
    Route::get('/laporan/evaluasi/print', [LaporanController::class, 'pdfevaluasi']);
    Route::get('/laporan/verifikasi/print', [LaporanController::class, 'pdfverifikasi']);
    Route::get('/laporan/dokumen', [LaporanController::class, 'dokumen']);
    Route::get('/laporan/verifikasi', [LaporanController::class, 'verifikasi']);
    Route::get('/laporan/evaluasi', [LaporanController::class, 'evaluasi']);
});
Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
