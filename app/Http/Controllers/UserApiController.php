<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserApiController extends Controller
{
    public function getUserApiFetch()
    {
        // 1. Call API
        $getApiData=Http::get('https://dummyjson.com/users');

        //2.check api data fetch success or not
        if($getApiData->successful())
        {
            // 3. Get API data
            $users = $getApiData->json();
            return $users;
        }
        else
        {
            return "no record found";
        }
    }
}
