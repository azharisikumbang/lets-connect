<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityCommentController;
use App\Http\Controllers\ActivityManagementController;
use App\Http\Controllers\CommunityConnectorController;
use App\Http\Controllers\RegisterCommunityController;
use App\Http\Controllers\ShowCommunityPublicPageController;
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

Route::get('/', [HomeController::class, '__invoke']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/buat-komunitas', [RegisterCommunityController::class, 'index'])->name('community-registration.index');
    Route::post('/mendaftar', [RegisterCommunityController::class, 'store'])->name('community-registration.store');

    // activity
    Route::resource('/activities', ActivityManagementController::class);
    Route::post('activity/{activity}/comments', [ActivityCommentController::class, 'store']);

    Route::post('/connect', [CommunityConnectorController::class, 'connect'])->name('community.connect');
    Route::post('/disconnect', [CommunityConnectorController::class, 'disconnect']);
});

// community registration
Route::get('/komunitas/{community}', [ShowCommunityPublicPageController::class, '__invoke'])->name('community-profil.show');
Route::get('/profil', function () { })->name('profil.index');


require __DIR__.'/auth.php';
