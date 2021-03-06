<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
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
    return view('main');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::resource('card', CardController::class);
Route::resource('box', BoxController::class);
