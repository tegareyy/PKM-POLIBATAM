<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\PengajuanProposalController;
use App\Http\Controllers\LaporanJudulController;
use App\Http\Controllers\LaporanProposalController;
use App\Http\Controllers\PenggunaController;

Route::get('/', function(){
    return view('pages.landing-page.index');
});
Route::get('/pengumuman', function(){
    return view('pages.landing-page.pengumuman');
});

Route::resource('/login',LoginController::class);

Route::resource('/admin/',DashboardController::class);
Route::resource('/admin/pengajuan-judul',PengajuanJudulController::class);
Route::resource('/admin/pengajuan-proposal',PengajuanProposalController::class);
Route::resource('/admin/laporan-judul',LaporanJudulController::class);
Route::resource('/admin/laporan-proposal',LaporanProposalController::class);
Route::resource('/admin/pengguna',PenggunaController::class);
