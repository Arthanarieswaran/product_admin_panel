<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('app');
});

Route::get('/product_up', function(){
        return view(('layouts.product_up'));
});

Route::get('/dashboard', function(){
    return view(('layouts.dashboard'));
});

// Route::post('/store',ProductController::class['store'])->name('store');
Route::post('/store','App\Http\Controllers\ProductController@store')->name('/store');
// Route::get('/pro','App\Http\Controllers\ProductController@index');

Route::get('dashboard', [ProductController::class, 'index']);
// Route::get('/home', 'StudentController@index');
Route::post('/update','App\Http\Controllers\ProductController@update')->name('/update');
Route::delete('/delete/{id}','App\Http\Controllers\ProductController@delete')->name('/delete');
