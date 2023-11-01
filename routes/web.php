<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::prefix('/')->controller(HomeController::class)->name('')->group(function () {

    Route::get('/', 'home')->name('home');
    
    Route::get('/contact', 'contact')->name('contact');
    
    
    Route::get('/about', 'about')->name('about');
    
    Route::get('/signin','signin')->name('signin');
    
    Route::get('/signup','signup')->name('signup');

});