<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::post('/store', [FrontEndController::class, 'store'])->name('store');

// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/dashboard', [BackendController::class, 'dashboardIndex'])->name('admin.dashboard');
    Route::get('/profile', [BackendController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/{id}', [BackendController::class, 'selfPasswordReset'])->name('admin.profile.reset');

    Route::get('/registrations', [BackendController::class, 'registrationIndex'])->name('admin.registrations');
    Route::get('/registrations/edit/{id}', [BackendController::class, 'edit'])->name('admin.registration.edit');
    Route::put('/registrations/edit/{id}', [BackendController::class, 'update'])->name('admin.registration.update');
    Route::get('/registrations/search', [BackendController::class, 'registrationSearch'])->name('admin.registration.search');
    Route::get('/registrations/trashed', [BackendController::class, 'trashed'])->name('admin.registrations.trashed');
    Route::get('/registrations/trash/{id}', [BackendController::class, 'trash'])->name('admin.registration.trash');
    Route::get('/registrations/trash/restore/{id}', [BackendController::class, 'restore'])->name('admin.registration.trash.restore');
    Route::get('/registrations/trash/destroy/{id}', [BackendController::class, 'destroyRegistration'])->name('admin.registration.trash.destroy');
    Route::get('/registrations/trashed/search', [BackendController::class, 'trashedSearch'])->name('admin.registration.trash.search');

    Route::get('/users', [BackendController::class, 'userIndex'])->name('admin.users');
    Route::get('/user/destroy/{id}', [BackendController::class, 'destroyUser'])->name('admin.user.destroy');
    Route::get('/user/password-reset/{id}', [BackendController::class, 'PasswordReset'])->name('admin.user.password.reset');
    Route::post('/user/create', [BackendController::class, 'userAdd'])->name('admin.user.create');
 
    Route::get('/user/search', [BackendController::class, 'userSearch'])->name('admin.user.search');

});

require __DIR__.'/auth.php';
