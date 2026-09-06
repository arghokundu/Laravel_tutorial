<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facade\DB;
use Illuminate\support\Facade\Hash;
use App\Models\Auth\RegisterUser;
use App\Http\Requests\Auth\loginRequest;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('Auth.login');
    }
    public function checkUserLoginOrNot(loginRequest $loginreq)
    {
        DB::beginTransaction();
        try
        {
            $loginemail=strtolower($loginreq->email);
            $userEmailCheck=RegisterUser::where('email',$loginemail)->first();
            if(!userEmailCheck)
            {
                DB::rollback();
                return back()->with('error','Email doesnot exists first register then login');
            }
            if(!Hash::check($userEmailCheck->password,$loginemail))
            {
                return back()->with('error','Email doesnot exists');  
            }
            Auth::login($userEmailCheck);
           
            $loginreq->session()->regenerate();
           
            DB::commit();
            
            return redirect('/showAllStudentList')->with('success', 'Login successfully.');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            return back()->with('error','Something went wrong on the site');
        }
    }
}
