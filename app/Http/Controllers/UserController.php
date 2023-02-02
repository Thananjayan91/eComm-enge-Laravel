<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function login(Request $req){
        //return $req->input();

        //return User::where(['email'=>$req->email])->first();
        $user= User::where(['email'=>$req->email])->first();
        //echo $user;
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            //$req->session()->put('user',$user);
            echo $user;
        }
    }
}
