<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Technician;
use Illuminate\Support\Facades\Auth;

class TechnicianController extends Controller
{
    public function check(Request $request){
        $request->validate([
            'email' =>'required|email|unique:technician,email',
            'password'=>'required|min:8|max:30'
        ],[
            'email.exists'=>'This email is not exists'
        ]);

        $creds = $request->only('email','password');

        if(Auth::guard('technician')->attempt($creds)){
            return redirect()->route('technician.home');
        }
        else{
            return redirect()->route('technician.login')->with('fail','Incorrect email or password');
        }
    }
}
