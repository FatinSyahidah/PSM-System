<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryModel\_inventories;
use App\Models\InventoryModel\_inv_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;
//use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class InventoryController extends Controller
{
    public function create(Request $request)
    {
        //\App\Models\InventoryModel\_inventories::create($request->all());
        $data = new _inventories;
        $data->stud_matricID = $request->stud_matricID;
        $data->stud_name = $request->stud_name;
        $data->inv_name = $request->inv_name;
        $data->quantity = $request->quantity;
        $data->date = $request->date;
        $data->req_status = $request->req_status;
        $data->save();
        return redirect('RequestInventory')->with('success','Request Submitted');

    }

}
