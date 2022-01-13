<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function newreq()
    {
        return view('Manage Proposal.AddReq');
    }
    public function viewstatus()
    {
        return view('Manage Proposal.ViewStat');
    }
    public function editreq()
    {
        return view('Manage Proposal.EditReq');
    }
    public function totalreq()
    {
        return view('Manage Proposal.TotalReq');
    }
    public function listreq()
    {
        return view('Manage Proposal.ListNewReq');
    }
}
