<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PageController;
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

Route::get(  '/', [PageController::class, 'home'])->name('homepage');
Route::get( '/catalogo', [PageController::class, 'catalogo'])->name('catalogo');
Route::get('/category', function () { return view('categoryShow');});
Route::get('/profilo', function () { return view('auth.profiloUser');})->name('profilo');


Route::get('/nuovo-annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');