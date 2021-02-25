<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;
use App\Http\Controllers\contactControler;

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

Route::get('/', [appController::class, 'home']);
Route::get('/portfolio', [appController::class, 'portfolio']);
Route::get('/contact', [appController::class, 'contact']);
Route::get('/blog', [appController::class, 'blog']);
Route::get('/resume', [appController::class, 'resume']);

