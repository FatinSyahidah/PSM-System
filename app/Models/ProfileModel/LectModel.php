<?php

namespace App\Models\ProfileModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'lect_id';
    protected $fillable = [
        'lect_name',
        'lect_staffID',
        'lect_field',
        'lect_officeNum',
        'lect_hpNum',
        'lect_email',
        'lect_add',
        'lect_expertise',
        'lect_profilePic'

    ];
}
