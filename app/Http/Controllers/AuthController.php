<?php

namespace App\Http\Controllers;



use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }

    // Adds a new user to the database.
    public function registerUser(Request $request){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:15',
        ]);


        $user = new User();
        $user -> uid = time();
        $user ->first_name = $request->first_name;
        $user ->last_name = $request->last_name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);

        //Save user data
        $res = $user -> save();

        // Get Response
        if ($res){
            // If response is successfull display message
            return back()-> with('success', 'User registered successfully');
        } else {
            // If response was not successful display error
            return back()-> with('error', 'Something wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required|min:8|max:15',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        // If response was not successful display error
        return back()-> with('error', 'Invalid login credentials.');

    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }



}
