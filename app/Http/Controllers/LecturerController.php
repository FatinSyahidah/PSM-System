<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileModel\lecturer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class LecturerController extends Controller
{
    //View Lecturer Profile Details
    public function viewlecturer()
    {
        $lecturers = DB::table('lecturers')->select('lect_id','name')->get();
        return view('Manage Profile.ProfileViewLecturer')->with('lecturers',$lecturers);
    }
    //Delete Lecturer Profile
    public function deletelect($lect_id)
    {
        
            DB::delete('delete from lecturers where lect_id = ?',[$lect_id]);
            echo "Record deleted successfully.<br/>";
            //echo '<a href = "/My Profile/ProfileViewStudent">Click Here</a> to go back.';

       // $students = \App\Models\ProfileModel\student::find($stud_id);
        //$students->Delete();
        //return redirect ('ProfileViewStudent');
    }
    
    //Edit Lecturer Profile

    public function vieweditlect($lect_id){
       $lecturers = \App\Models\ProfileModel\lecturer::find($lect_id);
       //dd($lecturers);
       return view('ProfileStudentEdit',['lecturers'=>$lecturers]);
    }
    
    public function updatelect(Request $request,$lect_id){
        $lecturers = \App\Models\ProfileModel\lecturer::find($lect_id);
        $lecturers-> updatelect($request->all());
        return redirect('/ProfileViewLecturer');  
     }
    
}
