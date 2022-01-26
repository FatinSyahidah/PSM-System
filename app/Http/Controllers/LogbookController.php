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
    public function add(Request $request)
    {
        // Insert data into database
        //\App\Models\LogbookModel\logbooks::add($request->all());
        $data = new logbooks;
        $data->stud_matricID = $request->stud_matricID;
        $data->stud_name = $request->stud_name;
        $data->meeting_date = $request->meeting_date;
        $data->start_time = $request->start_date;
        $data->end_time = $request->end_time;
        $data->current_progress = $request->current_progress;
        $data->discussion_details = $request->discussion_details;
        $data->action_plan = $request->action_plan;
        $data->save();
        return redirect('AddLogbook')->with('success','New Entry Submitted');

    }

}
