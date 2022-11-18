<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegistrationFeeController;
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
    return redirect('/register');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/coming-soon', function () {
    return view('errors.comingsoon', [
        'title' => 'COMING SOON',
    ]);
})->name('coming-soon');

//success
Route::get('/success', function () {
    return view('success', [
        'title' => 'SUCCESS',
    ]);
});

//Registration to Applicants
Route::get('/register', [ApplicantController::class, 'index']);
Route::post('/register', [ApplicantController::class, 'store']);

// Login to Applicants
Route::get('/login', [ApplicantController::class, 'indexLogin'])->name('login');
Route::post('/login', [ApplicantController::class, 'applicantAuth']);
Route::post('applicant-logout', [
    ApplicantController::class,
    'applicantLogout',
])->name('applicant-logout');

//ROUTE DASHBOARD
Route::get('/dashboard', function () {
    return view('injection.dashboard', [
        'title' => 'INJECTION Dashboard',
    ]);
})->middleware('auth');

//ROUTE NOT VERIFIED YET!
Route::get('/not-verified', function () {
    return view('injection.notverified', [
        'title' => 'Account Not Verified',
    ]);
})->name('not-verified');

//Admin
Route::middleware(['auth', 'role:Dev,Admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin-index');
        Route::get('/user', [AdminController::class, 'userIndex'])->name(
            'admin-user'
        );
        Route::get('/applicant', [
            AdminController::class,
            'applicantIndex',
        ])->name('admin-applicant');
        Route::get('/team', [AdminController::class, 'teamIndex'])->name(
            'admin-team'
        );
        //ROUTE BUAT UBAH-UBAH REGISTRATION FEE
        Route::resource('/registration-fee', RegistrationFeeController::class);
        Route::get('/uploaded-files', [
            DownloadController::class,
            'index',
        ])->name('uploaded-file');
        //ROUTE BUAT DOWNLOAD FILE2
        Route::get('/download-foto-ketua/{applicant:id}', [
            DownloadController::class,
            'downloadFotoKetua',
        ]);
        Route::get('/download-foto-anggota1/{applicant:id}', [
            DownloadController::class,
            'downloadFotoAnggota1',
        ]);
        Route::get('/download-foto-anggota2/{applicant:id}', [
            DownloadController::class,
            'downloadFotoAnggota2',
        ]);
        Route::get('/download-kartu-pelajar-ketua/{applicant:id}', [
            DownloadController::class,
            'downloadKartuPelajarKetua',
        ]);
        Route::get('/download-kartu-pelajar-anggota1/{applicant:id}', [
            DownloadController::class,
            'downloadKartuPelajarAnggota1',
        ]);
        Route::get('/download-kartu-pelajar-anggota2/{applicant:id}', [
            DownloadController::class,
            'downloadKartuPelajarAnggota2',
        ]);
        Route::get('/download-bukti-pembayaran/{applicant:id}', [
            DownloadController::class,
            'downloadBuktiPembayaran',
        ]);
    });
});
Route::get('/admin-login', [AuthController::class, 'index'])->name(
    'admin-login'
);
Route::post('/admin-login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('admin-logout');
Route::fallback(function () {
    return view('errors.404', [
        'title' => '404 Not Found',
    ]);
});
