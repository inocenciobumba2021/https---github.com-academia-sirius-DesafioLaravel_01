<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


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

Route::match(['get', 'post'],  '/', [HomeController::class, 'home'])
->name('index');

    Route::match(['get', 'post'],  '/logar', [UsuarioController::class, 'logar'])
->name('logar');



Route::resource('posts', PostController::class);
    