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
    return redirect(route('comingsoon'));
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/comingsoon', function () {
    return view('errors.comingsoon');
})->name('comingsoon');
