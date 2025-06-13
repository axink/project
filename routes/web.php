<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PregnancyStageController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pregnancystage', [PregnancyStageController::class, 'index'])->name('pregnancystage');

 Route::get('/mother-notes', function () {
     return view('mother-notes');
 })->name('mother-notes');

 Route::get('/babynames', function () {
    return view('babynames');
})->name('babynames');
