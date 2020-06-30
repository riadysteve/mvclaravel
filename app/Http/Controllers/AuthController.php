<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
        
        return view('register');
    }

    public function register_add(Request $request) {
            
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        // $data = $request->all();
        // dd($data);
        return view('welcome', compact('firstname', 'lastname'));
    }

    
}