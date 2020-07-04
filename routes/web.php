<?php

use Illuminate\Support\Facades\Route;
use app\Store;

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
    return view('welcome');
});

Route::get('api/stores', function(){
    return Store::all();
})

Route::get('api/stores/{id}', function(){
    return Store::findOrFail($id);
})