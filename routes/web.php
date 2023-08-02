<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('welcome');
});

route::prefix('/iplans')->name('iplans.')->group(function (){

    Route::get('/erp',[\App\Http\Controllers\BlogController::class,'form'])->name('show');
    //Route::post('/erp',[\App\Http\Controllers\BlogController::class,'store']);
    Route::get('/form',[\App\Http\Controllers\BlogController::class,'store'])->name('form');
    Route::post('/form',[\App\Http\Controllers\BlogController::class,'store2']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
