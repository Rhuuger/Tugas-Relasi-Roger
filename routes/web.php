<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('jabatan', JabatanController::class);
Route::resource('pegawai', PegawaiController::class);