<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('pages.booking');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/support', function () {
    return view('pages.support');
});

Route::get('/userguide', function () {
    return view('pages.userguide');
});

Route::get('/privacy', function () {
    return view('pages.privacy');
});

Route::get('/faqs', function () {
    return view('pages.faqs');
});

Route::get('/calendar', function () {
    return view('pages.calendar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
