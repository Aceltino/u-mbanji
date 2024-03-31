<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PropertyController;
use Illuminate\Http\Request;
use App\Http\Controllers\EmailController;
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
Route::post('/logout', [AuthController::class, 'deslogar']);
//CADASTRO

//CADASTRO
Route::post('/register-user', [InputController::class, 'peopleInputs']); //USER

Route::get('/show-firstten', [PropertyController::class, 'getPropertiesHome']); //Property-Show first 10 on homePage
Route::post('/show-property', [PropertyController::class, 'getProperty']); //Property-Show first 10 on homePage
Route::post('/show-all-property', [PropertyController::class, 'getProperties']); //Properties buy-rent
Route::post('/show-all-property-filter', [PropertyController::class, 'getFilteredProperties']); //Property-Show first 10 on homePage



Route::middleware(['auth:sanctum'])->group(function()
{
    //REGISTER
    Route::post('/register-bankdata', [InputController::class, 'bankDataInputs']); //Bank
    Route::post('/register-phone', [InputController::class, 'phoneInputs']); //Phone
    Route::post('/register-property', [InputController::class, 'propertyInputs']); //Property
    Route::post('/register-property-img', [InputController::class, 'propertyImgInputs']); //Property-IMG
    Route::post('/register-property-desc', [InputController::class, 'propertyDesc']); //Property-DESC
    Route::post('/register-property-price', [InputController::class, 'propertyPrice']); //Property-Price
    Route::post('/register-deal', [InputController::class, 'dealProperty']); //Property-deal

   //SHOW
    Route::post('/show-all-property-user', [PropertyController::class, 'getAllPersonalProperties']); //Property-Show first 10 on homePage


    Route::post('/show-all-proprietary-deals', [DealController::class, 'getAllProprietaryDeal']); //Property-Show first 10 on homePage
    Route::post('/show-all-client-deals', [DealController::class, 'getAllClientDeal']); //Property-Show first 10 on homePage
    Route::post('/show-deal', [DealController::class, 'getDeal']); //Property-Show first 10 on homePage
});

Route::post("/provide-mail", [EmailController::class, 'SendMail']);

