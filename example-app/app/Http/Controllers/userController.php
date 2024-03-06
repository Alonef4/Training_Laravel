<?php

namespace App\Http\Controllers;

use App\Models\customerModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function register_view(){
        return view("auth.register");
    }
    public function login_view(){
        return view("auth.login");
    }

    public function register_store(Request $request){
        $request -> validate([
            "email" => "email|unique:users",
            "password" => "min:6|confirmed"
        ]);
        $data = $request -> all();

        User::create($data);
        return redirect("/login");
    }

    public function login_auth(Request $request){
        $request -> validate([
            "email" => "email",
            "password" => "min:6"
        ]);
        $data = $request -> all();
        if(Auth::attempt(["email" => $data["email"], "password" => $data["password"]]) ){
            return redirect("/main");
        }else{
            return redirect("/login");
        }
    }
    public function logout(){
        Auth::logout();
        return redirect("/login");
    }
}
