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
        $logbooks = Logbook::latest()->paginate(5);
    
        return view('logbooks.index',compact('logbooks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new logbook entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('logbooks.add');
    }



    /**
     * Store a new logbook entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    
        Logbook::create($request->all());
     
        return redirect()->route('logbooks.index')
                        ->with('success','New Logbook Entry Successfully Uploaded.');
    }


    /**
     * Display the selected logbook entry.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        return view('logbooks.show',compact('logbook'));
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
    
        return redirect()->route('logbooks.index')
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
