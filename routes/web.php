<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityCommentController;
use App\Http\Controllers\ActivityManagementController;
use App\Http\Controllers\CommunityConnectorController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// community registration
Route::get('/buat-komunitas', [RegisterCommunityController::class, 'index'])->name('community-registration.index');
Route::post('/mendaftar', [RegisterCommunityController::class, 'store'])->name('community-registration.store');


Route::post('/connect', [CommunityConnectorController::class, 'connect']);
Route::post('/disconnect', [CommunityConnectorController::class, 'disconnect']);
Route::resource('/activities', ActivityManagementController::class);
Route::post('activity/{activity}/comments', [ActivityCommentController::class, 'store']);
Route::get('/profil', function () { })->name('profil.index');


require __DIR__.'/auth.php';
