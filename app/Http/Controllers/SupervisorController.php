<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryModel\_book_s_v;
use App\Models\InventoryModel\_stud_req;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller

    //View Expertise of Supervisor
    public function viewExpertise()
    {
        $data = DB::table('BookSV')->select('sv_id')->get();
        return view('Manage Supervisor.SVbooking')->with('data',$data);
    }

    //Book the Supervisor
    public function bookSV()
    {
        $data = DB::table('BookSV')->select('sv_id')->get();
        return view('Manage Supervisor.SVbooking')->with('data',$data);
    }

    //View the booking status
    public function viewBookingStaus()
    {
        $data = DB::table('BookSV')->select('sv_id')->get();
        return view('Manage Supervisor.SVbookingStaus')->with('data',$data);
    }