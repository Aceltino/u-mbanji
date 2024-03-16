<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\{
//     //Classes das Controllers
//     HomeController,
//     PropertyController,
//     BankController,
//     AuthController,
//     ClientController,
//     AdminController,
//     UserController
// };
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

// // TESTESSSS
// Route::get('/insert', [UserController::class, 'teste'])->name('teste');



// // Páginas sem login
// // HOMEPAGES-CONTROLLER
// Route::get('/', [HomeController::class,'viewHome'])->name('home');
// Route::get('/sobre', [HomeController::class,'viewAbout'])->name('about');
// Route::get('/alugar-comprar', [PropertyController::class,'viewBuyRent'])->name('buyrent');


// Route::get('/adicionar-dados-bancarios', [BankController::class,'viewAddBankAccount'])->name('addbankaccount');

// //Autenticação
// Route::prefix('autenticacao')->group(function(){
//     Route::get('registrar', [AuthController::class, 'viewRegister'])->name('register.user');
//     Route::get('entrar', [AuthController::class, 'viewLogin'])->name('login.user');
//     Route::get('redefinir-senha', [AuthController::class, 'viewRedefinePass'])->name('redefine.user');
//     Route::get('recuperar-senha', [AuthController::class, 'viewRecoveryPass'])->name('recovery.user');
// });

// Route::get('/ver-mais', [PropertyController::class,'viewSeeMore'])->name('seemoreproperty');


// // Páginas com login
// Route::get('/proprietario-cliente', [ClientController::class,'viewHome'])->name('home.admin');


// // Páginas do Administrador
// Route::get('/admin', [AdminController::class,'viewHome'])->name('home.client');



