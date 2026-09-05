<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\RegisterUser;

class registerController extends Controller
{
    public function showRegisterForm()
    {
        return view('Auth.register');
    }
}
