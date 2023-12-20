<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
//Login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

//Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');


Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signUp');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/profile2', function () {
    return view('profile.profile2');
});

Route::get('/add', function () {
    return view('profile.add');
});

Route::get('/explore', function () {
    return view('explore.explore');
});

Route::get('/placeBid', function () {
    return view('explore.placeBid');
});

Route::get('/edit', function () {
    return view('profile.edit');
});

Route::get('/pay', function () {
    return view('profile.pay');
});