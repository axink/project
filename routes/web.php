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



// pregnancy conponents
Route::get('/first', function () {
    return view('pregnancy-components.first');
})->name('pregnancy-components.first');

Route::get('/exercise', function () {
    return view('pregnancy-components.exercise');
})->name('pregnancy-components.exercise');

Route::get('/food', function () {
    return view('pregnancy-components.food-plan');
})->name('pregnancy-components.food');

Route::get('/mentall-support', function () {
    return view('pregnancy-components.mentally-support');
})->name('pregnancy-components.mentally-support');

Route::get('/sleeping', function () {
    return view('pregnancy-components.sleeping');
})->name('pregnancy-components.sleeping');

Route::get('/vitamins', function () {
    return view('pregnancy-components.vitamin');
})->name('pregnancy-components.vitamins');

Route::get('/weeks', function () {
    return view('pregnancy-components.weeks');
})->name('pregnancy-components.weeks');

Route::get('/monitorheart', function () {
    return view('pregnancy-components.monitorheart');
})->name('pregnancy-components.monitorheart');
