<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// user
Route::middleware(['auth', 'verified', 'role:user', 'visitor'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.home');
});


// role admin super admin and writer
Route::middleware(['auth', 'verified', 'role:admin|super-admin|writer'])->group(function () {
    route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/dashboard', [HomeController::class, 'adminIndex'])->name('dashboard');
            Route::resource('manage-users', UserController::class);
            Route::resource('post', PostController::class);
        });
});
