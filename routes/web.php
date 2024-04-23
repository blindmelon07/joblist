<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;


        route::view('/', 'home')->name('home');



        Route::view('/contact', 'contact')->name('contact');

        route::resource('jobs', JobController::class)->middleware('auth');



        route::get('/register', [RegisteredUserController::class, 'create']);
        route::post('/register', [RegisteredUserController::class, 'store']);

        route::get('/login', [SessionController::class,'create'])->name('login');
        route::post('/login', [SessionController::class,'store']);
        route::post('/logout', [SessionController::class,'destroy']);
