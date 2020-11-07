<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(Request $request) {
        if (Auth::attempt(array('name' => $request->name))){
            return "success";
        }else{
            return "Wrong Credentials";
        }
    }
}
