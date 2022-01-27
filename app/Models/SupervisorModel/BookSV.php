<?php

namespace App\Models\SupervisorModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSV extends Model
{
    use HasFactory;
    protected $primaryKey = 'sv_ID';
    protected $fillable = [
        'stud_ID',
        'lec_ID',
        'lect_expertise',
        'lect_name',
        'svBook_status'
    ];
}
