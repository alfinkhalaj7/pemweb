<?php

use App\Http\Controllers\GuruPublikController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', [GuruPublikController::class, 'index']);


Route::get('/lihat-guru', [GuruPublikController::class, 'index']);

Route::get('/', function () {
    return view('home'); // Halaman awal
});

Route::get('/lihat-guru', [GuruPublikController::class, 'index'])->name('lihat.guru');


Route::get('/', function () {
    $gurus = Guru::with('mapels')->get();
    return view('publik.index', compact('gurus'));
});
