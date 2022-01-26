<?php

namespace App\Models\LogbookModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _inv_details extends Model
{
    use HasFactory;
    protected $primaryKey = 'detail_ID';
    protected $fillable = [
        'inv_ID',
        'stud_matricID',
        'stud_name',
        'inv_name',
        'quantity',
        'pick_date',
        'ret_date',
        'remark'
    ];
}
