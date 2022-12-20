<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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
    return view('/header');
});

Route::get('/index',[SystemController::class,'index']);
Route::get('/header',[SystemController::class,'dashboard']);
Route::get('/news',[SystemController::class,'news']);
Route::get('/news1',[SystemController::class,'news1']);
Route::get('/footer',[SystemController::class,'footer']);
Route::get('/news2',[SystemController::class,'news2']);
Route::get('/news3',[SystemController::class,'news3']);