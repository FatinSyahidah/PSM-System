<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
   /*public function newreq()
    {
        
        return view('AddReq', compact('data'));
    }
    public function viewstatus()
    {
        return view('Manage Proposal.ViewStat');
    }
    public function editreq()
    {
        $proposal = proposal::all()->toArray();
        return view('Manage Proposal.EditReq', compact('proposal'));
    }
    public function totalreq()
    {
        return view('Manage Proposal.TotalReq');
    }
    public function listreq()
    {
        return view('Manage Proposal.ListNewReq');
    }*/

    function listreq()
    {
        $proposal = psm::proposals('proposal')->get();
        return view('Manage Proposal.StdMainPg', ['proposal' => $proposal]);
    }
}
