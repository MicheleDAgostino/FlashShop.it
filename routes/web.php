<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

    // ROTTE REVISOR CONTROLLER
    Route::get('/home/revisore', [RevisorController::class, 'index'])->name('revisor.index');
});

Route::get('/tutti/annunci', [AnnouncementController::class, 'index'])->name('announcement.index');


// ROTTE REVISORE PER ACCETTARE E RIFIUTARE ANNUNCIO

Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');







