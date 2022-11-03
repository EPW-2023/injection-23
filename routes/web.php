<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinktreeController;
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

Route::get('/success', function () {
    return view('success');
});

Route::get('/', function () {
    return redirect(route('coming-soon'));
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/coming-soon', function () {
    return view('errors.comingsoon');
})->name('coming-soon');
Route::resource('/linktree', LinktreeController::class)->middleware('auth');

//Auth
// Route::get('/register', [AuthController::class, 'getRegister']);
// Route::post('/register', [AuthController::class, 'postRegister'])->name(
//     'post-register'
// );
Route::get('/admin-login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/admin-login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

//Admin Panel
Route::get('/admin-panel', function () {
    return view('admin.admin');
})->middleware('auth');

//Not an admin :v
Route::get('/not-admin', function () {
    return view('not-admin');
});
