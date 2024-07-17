<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/submit_form', [UserController::class, 'store'])->name('user.store');

Route::get('/', function () {
    return view('welcome');
});
