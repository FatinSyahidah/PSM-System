<?php

namespace App\Models\ProposalModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposals extends Model
{
    use HasFactory;
    protected $table = 'proposals';
    public $timestamps = false;
}
