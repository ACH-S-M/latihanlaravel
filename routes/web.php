<?php

use App\Http\Controllers\produk;
use App\Http\Controllers\User\users;
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
Route::get('/',[produk::class,'getProduk']);
Route::get('/admin',[users::class,'getAdmin']);
