<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'App\Http\Controllers\KrathongController@index');

Route::get('p_kt', function () {
    return view('pages.p_kt');
});

Route::get('vdo_kt', function () {
    return view('pages.vdo_kt');
});
Route::post('savekrathong', 'App\Http\Controllers\KrathongController@savekrathong');

Route::get('vdo_kt1', function () {
    return view('pages.vdo_kt1');
});

Route::get('vdo_kt2', function () {
    return view('pages.vdo_kt2');
});

