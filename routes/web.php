<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/berita', function () {
    return view('berita');
});
// Route::get('/ekstrakurikuler', function () {
//     return view('ekstrakurikuler');
// });
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');


//Rute Ekskul
Route::resource('ekskul', EkstrakulikulerController::class);
Route::get('/ekstrakurikuler', [EkstrakulikulerController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
