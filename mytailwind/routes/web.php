<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/blog-admin', [BlogController::class  ,'index']);
Route::get('/blog-admin/create', [BlogController::class  ,'create']);
Route::get('/blog-admin/{id}/show', [BlogController::class  ,'show']);