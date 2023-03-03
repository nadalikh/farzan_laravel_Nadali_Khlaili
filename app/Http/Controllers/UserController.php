<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(UserLogin $request){
        $bodyReq = $request->only(['password', "email"]);
        if(!Auth::attempt($bodyReq))
            return back()->withErrors(['Your email or password is wrong']);
        return back()->with(['success', "wellcome admin"]);
    }
}
