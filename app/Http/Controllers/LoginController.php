<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function isAdmin(){
        return redirect ('Admin.dashforAdmin');
    }
    public function isUser(){
        return redirect ('User.dashforUser');
    }
}
