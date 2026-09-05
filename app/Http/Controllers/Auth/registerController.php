<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\RegisterUser;
use App\Http\Requests\Auth\registerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function showRegisterForm()
    {
        return view('Auth.register');
    }
    public function storeRegisterData(registerRequest $regreq)
    {
        DB::beginTransaction();
        try
        {
            $regUser=new RegisterUser();
            
            $regUser->name=strtoupper($regreq->name);
            $regUser->email=strtoLower($regreq->email);
            $regUser->password=Hash::make($regreq->password);
            $regUser->created_at=now();
            
            $saveRegUser=$regUser->save();
            if($saveRegUser)
            {
                DB::commit();
                return redirect('/login')->with('success','Data store successfully');
            }
            else
            {
                return back()->with('error','Not store successfully');
                DB::rollback();
            }
        }
        catch(\Exception $e)
        {
            DB::rollback();
           return back()->withInput()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
