<?php

use GuzzleHttp\Promise\Create;
use App\Http\Enryptions\Encryption;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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



Route::get('/', function(){
     return view('home');
})->name('home');


Route::get('client', [ClientController::class, 'page'])->name('client');
Route::post('client', [ClientController::class, 'create']);


Route::get('items', [ItemsController::class, 'page'])->name('items');
Route::post('items', [ItemsController::class, 'create']);

Route::get('register', [RegisterController::class, 'page'])->name('register');
Route::post('register', [RegisterController::class, 'create']);

Route::get('login', [LoginController::class, 'page'])->name('login');
//Route::post('login', [LoginrController::class, 'create']);