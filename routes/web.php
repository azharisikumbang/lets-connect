<?php

use App\Http\Controllers\RegisterCommunityController;
use Illuminate\Support\Facades\Route;

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

// public 
Route::post('/mendaftar', [RegisterCommunityController::class, 'store']);

Route::get('/profil', function () { })->name('profil.index');