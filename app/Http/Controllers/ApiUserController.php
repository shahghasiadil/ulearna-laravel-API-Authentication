<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiUserController extends Controller
{
    //

    public function index()
    {
        $user = Http::get('https://reqres.in/api/users?page=1');

        return $user;
    }
}
