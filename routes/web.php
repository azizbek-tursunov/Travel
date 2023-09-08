<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TourController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutUsController::class, 'aboutUs'])->name('about-us');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('tours', [TourController::class, 'index'])->name('tours');
Route::get('tours/{tour}', [TourController::class, 'show'])->name('showTour');

Route::get('destinations/{destination}', [DestinationController::class, 'showByDestination'])->name('showByDestination');

Route::get('hotels', [HotelController::class, 'index'])->name('hotels');
Route::get('hotels/{hotel}', [HotelController::class, 'show'])->name('showHotel');

Route::post('/order', [OrderController::class, 'store'])->name('order');

Route::get('lang/change', [\App\Http\Controllers\LangController::class, 'change'])->name('changeLang');
