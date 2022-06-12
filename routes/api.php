<?php

use App\Http\Controllers\UserController;
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

Route::group(['prefix' => 'user', 'as' => 'Auth.'], function () {
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/forgot', [UserController::class, 'forgotPassword'])->name('forgotpassword');
    Route::post('/reset', [UserController::class, 'resetPassword'])->name('reset');
});
