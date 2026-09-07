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
        // User is not logged in
        if (!Auth::check())
        {
            return redirect('/login')->with('error', 'Please login first.');
        }

        // User is logged in
        $response = $next($request);

        // Don't allow browser to cache protected pages
        $response->headers->set('Cache-Control','no-store, no-cache, must-revalidate, max-age=0');

        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');

        return $response;
    }
}
