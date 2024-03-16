<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InputController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    Route::post('/register-phone', [InputController::class, 'phoneInputs']); //Bank
    Route::post('/register-property', [InputController::class, 'propertyInputs']); //Bank

});

