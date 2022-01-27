<?php

namespace App\Models\SupervisorModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudReq extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_ID';
    protected $fillable = [
        'stud_ID',
        'lec_ID',
        'stud_req',
        'stud_list'
    ];
}
