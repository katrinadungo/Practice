<?php

use App\Http\Controllers\Bsit3aContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('BSIT3A', action: [App\Http\Controllers\Bsit3aContorller::class,'index']) ->name ('BSIT3A.lists');
Route::get('BSIT3A', action: [App\Http\Controllers\StudentsController::class,'index']) ->name ('BSIT3A.lists');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');


    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
   
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
