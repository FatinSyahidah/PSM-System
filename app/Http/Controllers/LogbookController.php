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

    /**
     * Display a listing of the logbook entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbooks = logbooks::latest()->paginate(5);
    
        return view('index',compact('logbooks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new logbook entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('Manage Logbooks.add');
    }



    /**
     * Store a new logbook entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'stud_matricID' => 'required',
            'stud_name' => 'required',
            'meeting_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'current_progress' => 'required',
            'discussion_details' => 'required',
            'action_plan' => 'required',
        ]);*/
    
        //$logbooks = new logbooks;
        //\App\Models\LogbookModel\logbooks::create($request->all());
        $data = new logbooks();
        $data->stud_matricID = $request->stud_matricID;
        $data->stud_name = $request->stud_name;
        $data->meeting_date = $request->meeting_date;
        $data->start_time = $request->start_time;
        $data->end_time = $request->end_time;
        $data->current_progress = $request->current_progress;
        $data->discussion_details = $request->discussion_details;
        $data->action_plan = $request->action_plan;
        $data->save();
        return redirect()->route('logbooks.index')
                        ->with('success','New Logbook Entry Successfully Uploaded.');
    }


    /**
     * Display the selected logbook entry.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show($logbook_ID)
    {
        $logbook = logbooks::find($logbook_ID);
        return view('Manage Logbooks.show',compact('logbook'));
    } 


    /**
     * Show the form for editing the selected logbook entry.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbook $product)
    {
        return view('logbooks.edit',compact('logbook'));
    }


    /**
     * Update the selected  edited logbook entry into database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {
        $request->validate([
            'stud_matricID' => 'required',
            'stud_name' => 'required',
            'meeting_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'current_progress' => 'required',
            'discussion_details' => 'required',
            'action_plan' => 'required',
        ]);
    
        $logbook->update($request->all());
    
        return redirect()->route('lManage Logbooks.index')
                        ->with('success','Logbook Entry updated successfully');
    }

 
    /**
     * delete the specified resource from storage.
     *
     * @param  \App\Logbook  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        $logbook->delete();
    
        return redirect()->route('logbooks.index')
                        ->with('success','Logbook entry deleted successfully');
    }
}
