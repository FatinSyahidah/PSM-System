<?php

namespace App\Models\LogbookModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbooks extends Model
{
    use HasFactory;
    protected $primaryKey = 'logbook_ID';
    protected $fillable = [
        'stud_matricID',
        'stud_name',
        'meeting_date',
        'start_time',
        'end_time',
        'currrent_progress',
        'discussion_details',
        'action_plan'
    ];
}