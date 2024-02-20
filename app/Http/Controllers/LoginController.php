<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login', []);
    }

    function logearse(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        $user = User::where('name', $validation['name'])->first();
        if($user == true){
            $_SESSION['user'] = [
                'name' => $validation['name'],
                'password' => $request['password'],
            ];
            return redirect()->route('home');
        }else{
            return view('login', []);
        }
    }
}
