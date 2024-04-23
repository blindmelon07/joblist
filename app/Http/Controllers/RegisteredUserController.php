<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create() {

       return view("auth.register");
    }

    public function store() {

            //validate
            $attributes =  request()->validate([
                'first_name' => ['required'],
                'last_name'=> ['required'],
                'email' => ['required','email'],
                'password' => ['required','min:8','confirmed'],
            ]);
          $user =  User::create($attributes);
          //login
          Auth::login($user);
         return redirect('/jobs');
    }
 }
