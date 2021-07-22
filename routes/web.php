<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
    return view('home');
});

Route::get("/login", function(){
    return view('login');
});

Route::get("/products", function(){
    return view('products');
});


Route::get('/productDetails', 'App\Http\Controllers\ProductDController@index');
Route::get('/cart', 'App\Http\Controllers\CartController@index');

Route::get("/products", 'App\Http\Controllers\ProductsController@index');
Route::post("/log-in", 'App\Http\Controllers\RegController@authenticate');
Route::resource('/register', 'App\Http\Controllers\RegController');



