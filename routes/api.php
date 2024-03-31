<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Email;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'logar']);

//CADASTRO
Route::post('/register-user', [InputController::class, 'peopleInputs']); //USER

Route::middleware(['auth:sanctum'])->group(function()
{
    Route::post('/register-bankdata', [InputController::class, 'bankDataInputs']); //Bank
    Route::post('/register-phone', [InputController::class, 'phoneInputs']); //Phone
    Route::post('/register-property', [InputController::class, 'propertyInputs']); //Property
    Route::post('/register-property-img', [InputController::class, 'propertyImgInputs']); //Property-IMG
    Route::post('/register-property-desc', [InputController::class, 'propertyDesc']); //Property-DESC
    Route::post('/register-property-price', [InputController::class, 'propertyPrice']); //Property-Price
    Route::post('/register-deal', [InputController::class, 'dealProperty']); //Property-deal

});


//Minhas Routas(Carlos Marques) 
Route::post("/provide-mail", [EmailController::class, 'SendMail']);

