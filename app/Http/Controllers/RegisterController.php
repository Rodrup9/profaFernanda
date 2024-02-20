<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        return view('register', []);
    }

    function join(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        if($request['password'] == $request['passwordConfirm']){
            $user = User::create($validation);
            return redirect()->route('login');
        }else{
            return view('register', []);
        }
    }
}
