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

    Route::get('/registrations', [BackendController::class, 'registrationIndex'])->name('admin.registrations');
    Route::get('/registrations/edit/{id}', [BackendController::class, 'edit'])->name('admin.registration.edit');
    Route::put('/registrations/edit/{id}', [BackendController::class, 'update'])->name('admin.registration.update');
    Route::get('/registrations/search', [BackendController::class, 'registrationSearch'])->name('admin.registration.search');

    Route::get('/users', [BackendController::class, 'userIndex'])->name('admin.users');
    Route::get('/user/destroy/{id}', [BackendController::class, 'destroy'])->name('admin.user.destroy');
    Route::get('/user/password-reset/{id}', [BackendController::class, 'PasswordReset'])->name('admin.user.password.reset');
 
    Route::get('/user/search', [BackendController::class, 'userSearch'])->name('admin.user.search');

});

require __DIR__.'/auth.php';
