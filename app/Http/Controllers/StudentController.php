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
        
        DB::delete('delete from students where stud_id = ?',[$stud_id]);
        echo "Record deleted successfully.<br/>";
        //echo '<a href = "/My Profile/ProfileViewStudent">Click Here</a> to go back.';

       // $students = \App\Models\ProfileModel\student::find($stud_id);
        //$students->Delete();
        //return redirect ('ProfileViewStudent');
    }
    
    //Edit Student Profile

    public function vieweditstud($stud_id){
       $students = \App\Models\ProfileModel\student::find($stud_id);
       //dd($students);
       return view('ProfileStudentEdit',['students'=>$students]);
    }
    
    public function updatestud(Request $request,$stud_id){
        $students = \App\Models\ProfileModel\student::find($stud_id);
        $students-> updatestud($request->all());
        return redirect('/ProfileViewStudent');  
     }
    

    //*public function editstud(Request $request,$stud_id)
   // {
         //$students = \App\Models\ProfileModel\student::find($stud_id);
        //$students->name = $request->name;
       // $students->stud_matricID = $request->stud_matricID;
        //$students->stud_course = $request->stud_course;
        //$students->stud_year = $request->stud_year;
        //$students->stud_hpNum = $request->stud_hpNum;
       // $students->email = $request->email;
       // $students->stud_add = $request->stud_add;
        //$students->stud_advisor = $request->stud_advisor;
        //$students->stud_psmTitle = $request->stud_psmTitle;

        //$students->save();//Save Student data
        //return redirect('ProfileViewStudent');//send back to view page
   // }
        
}
