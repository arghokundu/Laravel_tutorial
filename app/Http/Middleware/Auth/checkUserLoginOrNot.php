<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkUserLoginOrNot
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    //     dd(
    //     Auth::check(),
    //     Auth::user(),
    //     $request->session()->getId()
    // );
        if(!Auth::check())
        {
            return back()->with('error','user not loggin');
        }
        return $next($request);
    }
}
