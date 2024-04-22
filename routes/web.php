<?php

use App\Http\Controllers\JobController;

use Illuminate\Support\Facades\Route;


        route::view('/', 'home')->name('home');



        Route::view('/contact', 'contact')->name('contact');

        route::resource('jobs', JobController::class);
