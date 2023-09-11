<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

// ROTTE PUBLIC CONTROLLER
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// ROTTE ANNOUNCEMENT CONTROLLER

Route::middleware(['auth'])->group(function(){
    Route::get('/nuovo/annuncio', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');
});

Route::get('/tutti/annunci', [AnnouncementController::class, 'index'])->name('announcement.index');
