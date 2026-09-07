<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
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
            $userloginemail=strtolower($loginreq->email);
            $userloginPassword=$loginreq->password;
            // Find user using email
            $userEmailCheckAndPassword=RegisterUser::where('email',$userloginemail)->first();
            // Email does not exist
            if(!$userEmailCheckAndPassword)
            {
                DB::rollback();
                return back()->with('error','Email doesnot exists first register then login');
            }
            // Check password because password is hash
            if(!Hash::check($userloginPassword,$userEmailCheckAndPassword->password))
            {
                return back()->with('error','password doesnot match');  
            }
            // Email AND password are correct
            Auth::login($userEmailCheckAndPassword);
           
            $loginreq->session()->regenerate();
           
            DB::commit();
            
            return redirect('/showAllStudentList')->with('success', 'Login successfully.');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            dd('not login',$e->getMessage(),strlen($userEmailCheckAndPassword->password));
            return back()->with('error','Something went wrong on the site');
        }
    }
}
