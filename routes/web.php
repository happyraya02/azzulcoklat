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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/coklat', function () {
    return view('coklat');
});

Route::get('/snack', function () {
    return view('snack');
});

Route::get('/frozen', function () {
    return view('frozen');
});

Route::get('/jelly', function () {
    return view('jelly');
});

Route::get('/marsmallow', function () {
    return view('marsmallow');
});

Route::get('/baso', function () {
    return view('baso');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/cara', function () {
    return view('cara');
});