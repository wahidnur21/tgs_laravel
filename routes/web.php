<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController ::class, 'index']);

Route::get('/about', [HomeController ::class, 'about']);

Route::get('/add', [HomeController ::class, 'tambah']);

Route::get('/save', [HomeController ::class, 'simpan']);

Route::get('/test', [HomeController ::class, 'test']);



  