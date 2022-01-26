<?php

namespace App\Models\ProposalModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProfileModel\student;


class proposals extends Model
{
    use HasFactory;
    protected $guard = 'proposal';
    protected $primaryKey = 'proposal_ID';
    //public $timestamps = false;

    protected $fillable = [
        'proposal_ID',
        'stud_proposal',
        'status_proposal',
        'date_submit',
    ];

    /*public function student()
    {
        return $this->belongsTo(student::class);
    }*/
}
