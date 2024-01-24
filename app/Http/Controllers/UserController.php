<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        echo 'email:' . $email .' Name: '. $name . 'Password: '.$password;
    }

    public function loginUser(Request $request){
        return 'Logged';
    }
}
