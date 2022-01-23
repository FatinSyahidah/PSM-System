<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProposalModel\proposals;
use App\Models\ProfileModel\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;
//use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProposalsController extends Controller
{
    //
    function save(Request $req)
    {
        //print_r($req->input());
        $proposals = new Proposals;
        $proposals->name = $req->name;
        $proposals->name = $req->name;
        echo $proposals->save();
    }
    public function newReq()
    {
        $student = Student::with('proposals')->get();
        $proposals = Proposals::with('student')->get();

        return view('Manage Proposal.newReq', compact('student, proposals'));
    }

    public function viewstudent()
    {
        $students = DB::table('students')->select('stud_id','name')->get();
        return view('Manage Proposal.StdMainPg')->with('students',$student);
    }
}
