<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MortgageController;
use App\Http\Controllers\Public\PublicController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/mortgages', MortgageController::class);

Route::get('/mortgages', [PublicController::class, 'index'])->name('index');
Route::get('/mortgages/{id}', [PublicController::class, 'show'])->name('show');
