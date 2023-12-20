<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;

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

// //Login
// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

// //Register
// Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
// Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');


Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register/verify/{verify_key}', [RegisterController::class, 'verify']);

Route::post('/login', [LoginController::class, 'login']);
