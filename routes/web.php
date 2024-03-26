<?php

use App\Http\Controllers\AnnouncementController;
<<<<<<< Updated upstream
use App\Http\Controllers\FrontController;
=======
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
Route::get('/', [FrontController::class,'welcome'])->name('homepage');
Route::get('/categorie/{category}',[FrontController::class,'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');
Route::get('dettaglio/annuncio/{announcement}',[AnnouncementController::class,'showAnnouncement'])->name('announcements.show');
Route::get('tutti/annunci',[AnnouncementController::class,'indexAnnouncement'])->name('announcements.index');
=======
Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::get('/catalogo', [PageController::class, 'catalogo'])->name('catalogo');

Route::get('/nuovo-annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');

//route Home revisore
Route::get('revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

//route accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');

//route rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');
>>>>>>> Stashed changes
