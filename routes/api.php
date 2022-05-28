<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware(['auth', 'verified', 'role:admin|super-admin|writer'])->group(function () {
//     route::prefix('admin')
//         ->name('admin.')
//         ->group(function () {
//             Route::get('/dashboard', [HomeController::class, 'adminIndex'])->name('dashboard');
//             Route::resource('manage-users', UserController::class);
//             Route::resource('tag', TagController::class);
//         });
// });
