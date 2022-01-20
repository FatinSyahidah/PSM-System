<?php

namespace App\Models\ProfileModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'stud_id';
    protected $fillable = [
        'stud_name',
        'stud_matricID',
        'stud_course',
        'stud_year',
        'stud_hpNum',
        'stud_email',
        'stud_add',
        'stud_advisor',
        'stud_psmTitle',
        'stud_psmPhase',
        'stud_profilePic'
    ];
}
