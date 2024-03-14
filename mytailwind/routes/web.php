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
Route::post('/blog-admin/store', [BlogController::class, 'store'])->name('store');
Route::get('/blog-admin/{id}/show', [BlogController::class  ,'show'])->name('show');
Route::put('/blog-admin/{id}', [BlogController::class, 'update'])->name('update');;
Route::delete('/blog-admin/{id}/destroy', [BlogController::class, 'destroy'])->name('destroy');

