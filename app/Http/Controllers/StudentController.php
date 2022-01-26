<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileModel\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class StudentController extends Controller 
{
    
    //View Student Profile Details
    public function viewstudent()
    {
        $students = DB::table('students')->select('stud_id','name')->get();
        return view('Manage Profile.ProfileViewStudent')->with('students',$students);
    }
    //Delete Student Profile
    public function deletestud($stud_id)
    {
        $students = \App\Models\ProfileModel\student::delete($stud_id);
        $students->delete($students);
        return redirect ('ProfileViewStudent');
    }
    
    //Edit Student Profile
    public function editstud($stud_id)
    {
        $students = \App\Models\ProfileModel\student::find($stud_id);
          return view('ProfileStudentEdit');
    }
        
}
