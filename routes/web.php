<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'Profile']);


Route::get('/find/{id}', [UserController::class, 'find']);
