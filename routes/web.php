<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

//SUCCESS
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
Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboardIndex'])->name(
            'dashboard-page '
        );
        Route::get('/submission-paper', [
            DashboardController::class,
            'submissionIndex',
        ])->name('submission-page');
        Route::post('/submission-paper', [
            DashboardController::class,
            'submissionPost',
        ])->name('submission-post');
        Route::get('/submission-success', [
            DashboardController::class,
            'submissionSuccess',
        ])->name('submission-success');
    });
});

//ROUTE NOT VERIFIED YET!
Route::get('/not-verified', function () {
    return view('injection.notverified', [
        'title' => 'Account Not Verified',
    ]);
})->name('not-verified');

//DEV ONLY
Route::middleware(['auth', 'role:Dev'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/user', [AdminController::class, 'userIndex'])->name(
            'admin-user'
        );
        Route::post('/user', [AdminController::class, 'newAdminPost'])->name(
            'create-admin'
        );
    });
});
//Admin
Route::middleware(['auth', 'role:Dev,Admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin-index');
        Route::get('/applicant', [
            AdminController::class,
            'applicantIndex',
        ])->name('admin-applicant');
        Route::get('/team', [AdminController::class, 'teamIndex'])->name(
            'admin-team'
        );
        //ROUTE PAPER SUBMISSION
        Route::get('/submission-paper', [
            AdminController::class,
            'submissionIndex',
        ])->name('admin-submission');
        //ROUTE BUAT UBAH-UBAH REGISTRATION FEE
        Route::resource('/registration-fee', RegistrationFeeController::class);
        Route::get('/uploaded-files', [
            DownloadController::class,
            'index',
        ])->name('uploaded-file');

        //ROUTE VERIFICATION
        Route::get('/verification', [
            AdminController::class,
            'verificationIndex',
        ])->name('admin-verification');
        Route::get('/verification/{user:id}/edit', [
            AdminController::class,
            'verifyPage',
        ]);
        Route::put('verification/{user:id}', [
            AdminController::class,
            'verifyUser',
        ]);

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
        Route::get('/download-paper-submission/{submission:id}', [
            DownloadController::class,
            'downloadPaperSubmission',
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
