<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function newreq()
    {
        return view('Manage Proposal.AddReq');
    }
}
