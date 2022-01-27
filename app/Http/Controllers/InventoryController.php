<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryModel\_inventories;
use App\Models\InventoryModel\_inv_details;
use Illuminate\Support\Facades\Auth;


class InventoryController extends Controller
{
    // insert into inventories table
    public function create(Request $request)
    {
        // Insert data into database
        //\App\Models\InventoryModel\_inventories::create($request->all());
        $data = new _inventories;
        $data->stud_matricID = $request->stud_matricID;
        $data->stud_name = $request->stud_name;
        $data->inv_name = $request->inv_name;
        $data->quantity = $request->quantity;
        $data->date = $request->date;
        $data->req_status = $request->req_status;
        $data->save();
        return redirect('RequestInventory')->with('success','Request Submitted'); //return to Request Inventory page with success alert
    }

    public function viewStatus()    
    {
        //$student = \App\Models\ProfileModel\student::all();
        $data = _inventories::orderBy('created_at','ASC')->where('stud_name',Auth::user()->name);  //retrieve data from database
        return view('RequestStatus',['data' => $data])->with($data);      //student view request status
    }

    public function updateRequest(Request $request,$inv_ID){     //update student request status
        $this->validate($request,[
            'req_status' => 'required',                         //req_status is required field to update
        ]);

        $data = _inventories::find($inv_ID);
        $data->req_status = $request->input('req_status');        //insert req_status into databse

        $data->save();                                          //save data to database
        return redirect('StudentRequestStatus')->with('success', 'Status has been updated');  //return to student request status page with success alert
    }

    public function add(Request $request){                      //lecturer use to insert pick up item data to _inv_details table
        $this->validate($request,[                              // required field to insert data
            'inv_ID' => 'required',         
            'stud_matricID' => 'required',
            'stud_name' => 'required',
            'inv_name' => 'required',
            'quantity' => 'required',
            'pick_date' => 'required',
            'ret_date'  => 'required',
            'remark'  => 'required'
        ]);
        $data =   new _inv_details;                             //insert data to database
        $data->inv_ID = $request->inv_ID;
        $data->stud_matricID = $request->stud_matricID;
        $data->stud_name = $request->stud_name;
        $data->inv_name = $request->inv_name;
        $data->quantity = $request->quantity;
        $data->pick_date = $request->pick_date;
        $data->ret_date = $request->ret_date;
        $data->remark = $request->remark;
        $data->save();                                          //save data to database
        return redirect('PickUpItem')->with('success', 'Successfully submitted');  //return to pick up item page with success alert
    }

    public function updateDetail(Request $request,$inv_ID){           //technician update pick up item details
        $this->validate($request,[                                    // required field to update
            'ret_date' => 'required',
            'remark' => 'required'
        ]);

        $data = _inv_details::find($inv_ID);                           //find inv id in table
        $data->ret_date = $request->input('ret_date');                  //input to be updated
        $data->remark = $request->input('remark');


        $data->save();                                                  //save data to database
        return redirect('InventoryDetails')->with('success', 'Status has been updated'); //return to Inventory Details page with success alert

    }
}
