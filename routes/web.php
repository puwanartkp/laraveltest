<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/index', function () {
    return view('index');
});

Route::get('/signin', function () {
    return view('signin');
});


Route::post('/signin_db', [LoginController::class, 'login'])->name('login');

// Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('login.form');
// Route::post('/signin', [LoginController::class, 'login'])->name('login');