<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
 use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/', function () {
    return view('welcome') ;
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');

    Route::post('profile/update', [UserController::class, 'update'])->name('profile.update');
    Route::get('profile/delete/{profile}', [UserController::class, 'delete']);







    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('user', [AdminController::class, 'store'])->name('user.store');
    Route::get('user/delete/{user}', [AdminController::class, 'delete'])->name('user.delete');
});


