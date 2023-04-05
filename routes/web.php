<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => ['web']], function () {
    Route::put('user', [UserController::class, 'updateUser']);
    Route::post('user', [UserController::class, 'registerUser']);
    Route::post('user/login', [UserController::class, 'loginUser']);
    Route::post('user/logout', [UserController::class, 'logoutUser']);

    Route::get('profile/edit', [PageController::class, 'showEditProfile']);
    Route::get('drink/{id}', [PageController::class, 'showDrink']);
    Route::get('food/{id}', [PageController::class, 'showFood']);
    Route::get('register', [PageController::class, 'showRegister']);
    Route::get('profile', [PageController::class, 'showProfile']);
    Route::get('login', [PageController::class, 'showLogin']);
    Route::get('', [PageController::class, 'showHome']);
});