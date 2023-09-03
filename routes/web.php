<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationsController;
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
Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
/**
 * Override the default auth register route to add middleware.
 */
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('hasInvitation');
Route::get('register/request', [RegisterController::class, 'requestInvitation'])->name('requestInvitation');
/**
 * Invitations group with auth middleware.
 * Eventhough we only have one route currently, the route group is for future updates.
 */
Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'invitations'
], function() {
    Route::get('', [InvitationsController::class, 'index'])->name('showInvitations');
});

/**
 * Route for storing the invitation. Only for guest users.
 */
Route::post('invitations', [InvitationsController::class, 'store'])->middleware('guest')->name('storeInvitation');