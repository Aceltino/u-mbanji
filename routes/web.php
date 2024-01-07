<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    //Classes das Controllers
    HomeController
};
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

// Páginas sem login
/*Route::get('/', [HomeController::class,'viewHome'])->name('home');*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buy-rent', function () {
    return view('buy-rent');
});