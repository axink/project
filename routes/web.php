<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PregnancyStageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/pregnancy-stage', function () {
//     return view('pregnancystage'); // or your controller method
// })->name('pregnancystage');

Route::get('/home', [HomeController::class, 'index'])->name('home');
 Route::get('/pregnancystage', [PregnancyStageController::class, 'index'])->name('pregnancystage');

 Route::get('/mother-notes', function () {
     return view('mother-notes');
 })->name('mother-notes'); 
 