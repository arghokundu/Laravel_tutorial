<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function showRegisterForm()
    {
        return view('Auth.register');
    }
}
