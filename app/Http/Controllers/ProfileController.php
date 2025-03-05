<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
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
        return to_route("login.show");
    }


    //auth---------------------------------------------------------------------------------------------------------------------------------------------------------
    public function show() {
        
    }

    //login
    public function login() {}

    // logout
    public function logout() {}
}
