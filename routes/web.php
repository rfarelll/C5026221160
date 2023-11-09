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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('meet1', function () {
    return view('meet1');
});
Route::get('meet2', function () {
    return view('meet2');
});
Route::get('meet3', function () {
    return view('meet3');
});
Route::get('meet4-1', function () {
    return view('meet4-1');
});
Route::get('meet4-2', function () {
    return view('meet4-2');
});
Route::get('meet5-1', function () {
    return view('meet5-1');
});
Route::get('meet5-2', function () {
    return view('meet5-2');
});
Route::get('meet6', function () {
    return view('meet6');
});
Route::get('meet7', function () {
    return view('meet7');
});
Route::get('perkalian', 'App\Http\Controllers\MahasiswaController@index');

Route::get('biodata', 'App\Http\Controllers\MahasiswaController@biodata');
