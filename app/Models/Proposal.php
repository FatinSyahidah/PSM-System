<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table = 'proposal';
    protected $fillable = [
        'proposal_ID',
        'stud_proposal',
        'status_proposal',
        'date_submit',
        'total_newReq'.
        'total_Req',
    ];

}
