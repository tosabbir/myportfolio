<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// all user route
Route::get('/', function () {
    return view('index');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/download/cv', 'downloadCV')->name('download.cv');
    Route::post('/store/message', 'storeMessage')->name('store.message');
    Route::post('/store/comment', 'storeComment')->name('store.comment');
});




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/messages', 'allMessages')->name('all.messages');
        Route::get('/details/messages/{id}', 'detailsMessages')->name('details.messages');
        Route::get('/replay/messages/{id}', 'replayMessages')->name('replay.messages');
        Route::post('/send/mail/{id}', 'sendMail')->name('send.mail');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
