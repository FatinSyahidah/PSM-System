<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
    public function newreq()
    {
        $proposal = proposal::all()->toArray();
        return view('Manage Proposal.AddReq');
    }
    public function storereq(Request $request)
    {
        $proposal = new Proposal;
        if($request->hasfile('stud_proposal'))
        {
            $file = $request->file('stud_proposal');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Proposal/', $filename);
            $proposal->stud_proposal = $filename;
        }
        $proposal->save();
        return redirect()->back()->with('status', 'File Successfully Upload');
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
    }
}
