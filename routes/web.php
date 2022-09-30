<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\PengajuanProposalController;
use App\Http\Controllers\LaporanJudulController;
use App\Http\Controllers\LaporanProposalController;


Route::resource('/',DashboardController::class);
Route::resource('/login',LoginController::class);
Route::resource('/pengajuan-judul',PengajuanJudulController::class);
Route::resource('/pengajuan-proposal',PengajuanProposalController::class);
Route::resource('/laporan-judul',LaporanJudulController::class);
Route::resource('/laporan-proposal',LaporanProposalController::class);

