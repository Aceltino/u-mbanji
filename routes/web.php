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

Route::get('/adicionar-dados-bancarios', function () {
    return view('add-bank-details');
});

Route::get('/alugar-comprar', function () {
    return view('buy-rent');
});

Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/redefinir-senha', function () {
    return view('password-reset');
});

Route::get('/recuperar-senha', function () {
    return view('password-recovery');
});


Route::get('/sobre', function () {
    return view('about');
});

Route::get('/ver-mais', function () {
    return view('see-more');
});

// Páginas com login
Route::get('/home', function () {
    return view('client-owner/home');
});

// Páginas do Adm
Route::get('/admin', function () {
    return view('admin/home');
});