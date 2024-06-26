<?php

use App\Http\Controllers\MainController;
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




Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/detail', [MainController::class, 'detail'])->name('detail');
Route::get('/contactus', [MainController::class, 'contactus'])->name('contactus');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');
