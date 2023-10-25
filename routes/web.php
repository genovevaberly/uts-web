<?php

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

Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signUp');
});

Route::get('/profile', function () {
    return view('profile.profile');
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