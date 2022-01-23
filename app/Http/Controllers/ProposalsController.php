<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProposalModel\proposals;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;
//use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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
}
