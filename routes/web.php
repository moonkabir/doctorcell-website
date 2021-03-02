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
Route::get('/main', function () {
    return view('Frontend/main');
});
Route::get('/word', function () {
    return view('Frontend/word');
});
Route::get('/union', function () {
    return view('Frontend/union');
});
Route::get('/thana', function () {
    return view('Frontend/thana');
});
Route::get('/thotto-batayan', function () {
    return view('Frontend/thotto-batayan');
});
Route::get('/gallery', function () {
    return view('Frontend/gallery');
});
Route::get('/dhaka-south-city', function () {
    return view('Frontend/dhaka-south-city');
});

