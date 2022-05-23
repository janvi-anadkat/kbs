<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MarketAPIController;
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

Route::get('/home', function () {
    return view('home')->name('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/market', function () {
    return view('market');
});
;

Route::post('login-submit',[FrontendController::class,'loginSubmit'])->name('login-submit');
Route::post('register-submit',[FrontendController::class,'registerSubmit'])->name('register-submit');
Route::post('market-submit',[MarketAPIController::class,'marketSubmit'])->name('market-submit');

Route::get('market-getdata',[MarketAPIController::class,'marketgetdata'])->name('market-getdata');

