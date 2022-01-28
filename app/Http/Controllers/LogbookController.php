<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogbookModel\logbooks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;

//use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class LogbookController extends Controller
{

    // store new logbook entry into logbook table
    public function StoreNewEntry(Request $request)
    {
        // Insert data into database
        $entry = new logbooks;
        $entry->stud_matricID = $request->stud_matricID;
        $entry->stud_name = $request->stud_name;
        $entry->meeting_date = $request->meeting_date;
        $entry->start_time = $request->start_time;
        $entry->end_time = $request->end_time;
        $entry->current_progress = $request->current_progress;
        $entry->discussion_details = $request->discussion_details;
        $entry->action_plan = $request->action_plan;
        $entry->save();
        return redirect('StudentLogbook')->with('success','New Logbook Entry Submitted'); //return to StudentLogbook page with success alert
    }


    //update selected logbook entry using logbook_ID 
    public function UpdateLogbook(Request $request,$logbook_ID){           
        $this->validate($request,[                                    // required field to update
            'stud_matricID' => 'required',                             //student edit existed data
            'stud_name' => 'required',
            'meeting_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'current_progress' => 'required',
            'discussion_details' => 'required',
            'action_plan' => 'required'
        ]);

        $entry = logbooks::find($logbook_ID);                           //find selected logbook entry using logbook_id in table
        $entry->stud_matricID = $request->input('stud_matricID');                  //input to be updated
        $entry->stud_name = $request->input('stud_name');
        $entry->meeting_date = $request->input('meeting_date');                 
        $entry->start_time = $request->input('start_time');
        $entry->end_time = $request->input('end_time');                         
        $entry->current_progress = $request->input('current_progress');
        $entry->discussion_details = $request->input('discussion_details');                  
        $entry->action_plan = $request->input('action_plan');


        $entry->save();                                                  //save update edited data to database
        return redirect('StudentLogbook')->with('success', 'Logbook Entry Updated'); //return to Student Logbook page with success alert

    }


    //for student to view selected logbook entry using logbook_ID
    public function ShowLogbook(Post $logbook)
    {
        return view('ViewStudentLogbook',compact('logbook'));
    }

    
     //to delete selected logbook
     public function DeleteLogbook($logbook_ID)
     {
         
        DB::delete('delete from logbooks where logbook_ID = ?',[$logbook_ID]);
        return redirect('StudentLogbook')->with('success','Logbook Entry Deleted'); //return to StudentLogbook page with message alert
     }

     //for lecturer view selected logbook entry using logbook_ID
    public function LecturerShowLogbook(Post $logbook)
    {
        return view('ViewLecturerLogbook',compact('logbook'));
    }  
    
}
