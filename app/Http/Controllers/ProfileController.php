<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function create()
    {
        return view("profile.register");
    }

    public function store(ProfileRequest $request)
    {
        $formField = $request->validated();

        //crypt password
        $password = $request->password;
        $formField["password"] = Hash::make($password);

        //insert
        Profile::create($formField);
        return to_route("login.show")->with("success","your infos submit successfully");
    }


    //auth---------------------------------------------------------------------------------------------------------------------------------------------------------
    public function show() {
        return view("profile.show");
    }

    //login
    public function login(Request $request) {
        // get values
        $email = $request->email;
        $password = $request->password;

        //  fill database fields
        $credentials = [
            "email"=>$email,
            "password"=>$password
        ];
       
        // check if these fields are already existing in database
        if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return to_route("home")->with("success", "welcome back ".$email);
        }else{
            return back()->withErrors([
                "email"=> "invalid email or password"
            ])->onlyInput("email");
        }
    }

    // logout
    public function logout() {}
}
