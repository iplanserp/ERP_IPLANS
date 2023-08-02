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

route::prefix('/blog')->name('blog.')->group(function (){
    Route::get('/',function(Request $request){
        return [
            'link'=> \route('blog.show',['slug'=>'article','id'=>13]),
        ];
    })->name('index');

    Route::get('/{slug}-{id}',[\App\Http\Controllers\BlogController::class,'show'])->where([
        'id'=>'[0-9]+',
        'slug'=>'[a-z0-9\-]+'
    ])->name('show');
    Route::get('/form',[\App\Http\Controllers\BlogController::class,'form'])
        ->name('form');
    Route::post('/form/',[\App\Http\Controllers\BlogController::class,'store']);
    Route::post('/form',[\App\Http\Controllers\BlogController::class,'store2']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
