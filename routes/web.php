<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');

//route login
Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//route register
Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
Route::post('/register',[RegisterController::class, 'register'] )->name('register');

//route profile
Route::get('/profile', 'ProfileController@index')->name('profile');

//route dashboard
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

