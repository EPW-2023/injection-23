<?php

use App\Http\Controllers\ApplicantBioController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicantFileController;
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
    return redirect('/coming-soon');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/coming-soon', function () {
    return view('errors.comingsoon');
})->name('coming-soon');

Route::get('/admin-panel', function () {
    return view('admin.index');
});

//success
Route::get('/success', function () {
    return view('success');
});

//Registration to Applicants
Route::get('/register', [ApplicantController::class, 'index']);
Route::post('/register', [ApplicantController::class, 'store']);
