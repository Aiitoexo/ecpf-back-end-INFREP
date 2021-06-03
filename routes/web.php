<?php

use App\Http\Controllers\AvailableRoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/chambres-disponible', [AvailableRoomController::class, 'index'])->name('available.room');

Route::get('/reservation/chambre/{id}', [BookingController::class, 'index'])->name('booking');
Route::post('/reservation/chambre/confirmation', [BookingController::class, 'store'])->name('booking.store');
