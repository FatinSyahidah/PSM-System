<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileModel\student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller 
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:student,email',
            'password' => 'required|min:8|max:30',
            'cpassword' => 'required|min:8|max:30|same:password'
        ]);

        $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $save = $student->save();

        if($save){
            return redirect()->back()->with('success','You are now redistered successfully');
        }
        else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    public function check(Request $request){
        $request->validate([
            'email'=> 'required|email|unique:student,email',
            'password' => 'required|min:8|max:30'
        ],[
            'email.exists'=>'This email is not exist'
        ]);

        $creds = $request->only('email','password');
        if( Auth::attempt($creds)){
            return redirect()->route('student.home');
        }
        else{
            return redirect()->route('student.login')->with('fail','Incorrect email or password');
        }
    }
        
}
