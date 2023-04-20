<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/rooms', [PagesController::class, 'rooms'])->name('rooms');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/booking', [PagesController::class, 'booking'])->name('booking');
Route::get('/booking1', [PagesController::class, 'booking1'])->name('bookingStage1');
Route::get('/booking2', [PagesController::class, 'booking2'])->name('bookingStage2');
Route::get('/booking3', [PagesController::class, 'booking3'])->name('bookingStage3');
Route::get('/policies', [PagesController::class, 'policies'])->name('policies');
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
