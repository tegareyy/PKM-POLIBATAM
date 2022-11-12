<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\PengajuanProposalController;
use App\Http\Controllers\LaporanJudulController;
use App\Http\Controllers\LaporanProposalController;
use App\Http\Controllers\DataUserController;

Route::get('/', function(){
    return view('pages.landing-page.index');
});
Route::get('/pengumuman', function(){
    return view('pages.landing-page.pengumuman');
});

Route::resource('/login',LoginController::class);

// route gorup /admin 
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/', DashboardController::class);
    Route::resource('/data-user', DataUserController::class);

    Route::resource('/pengajuan-judul',PengajuanJudulController::class);
    Route::resource('/pengajuan-proposal',PengajuanProposalController::class);
    Route::resource('/laporan-judul',LaporanJudulController::class);
    Route::resource('/laporan-proposal',LaporanProposalController::class);
});
