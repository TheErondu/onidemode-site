<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::get('/error/test/{code}', function ($code) {
    abort((int) $code);
});
Route::get('/about', [PageController::class, 'about'])->name('frontend.about');
Route::get('/meet-the-ceo', [PageController::class, 'meet_the_ceo'])->name('frontend.meet-the-ceo');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('frontend.contact');
Route::get('/participants/register', [PageController::class, 'registerParticipant'])->name('frontend.participants.register');

Route::post('/register/pay', [PaymentsController::class, 'redirectToGateway'])->name('frontend.register.pay');
Route::get('/payment/callback', [PaymentsController::class, 'handleGatewayCallback'])->name('payment.callback');

/// Backoffice Routes
Route::middleware('auth')->group(function () {
    Route::get('/back-office', function () {
        return view('admin.home');
    })->name('admin.back-office');

    Route::put('/back-office/pages/manage/update/{page}', [AdminController::class, 'updatePage'])->name('admin.pages.manage.update');
    Route::get('/back-office/pages/manage/{page}', [AdminController::class, 'managePage'])->name('admin.pages.manage');
    Route::post('/back-office/pages/manage/upload', [AdminController::class, 'uploadFile'])->name('admin.pages.manage.upload');
    Route::get('/back-office/settings', [SettingController::class, 'index'])->name('admin.settings.manage');
    Route::put('/back-office/settings/update', [SettingController::class, 'update'])->name('admin.settings.update');
    Route::get('/back-office/payments/', [PaymentsController::class, 'index'])->name('admin.payments.manage');
    Route::resource('/back-office/users', UserController::class)->names('admin.settings.users');
    Route::resource('/back-office/participants', ParticipantController::class)->names('admin.settings.participants');
    Route::get('back-office/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('back-office/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('back-office/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/auth.php';
