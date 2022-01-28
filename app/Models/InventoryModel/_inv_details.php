<?php

namespace App\Models\InventoryModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _inv_details extends Model
{
    use HasFactory;
    protected $primaryKey = 'detail_ID'; //primary key of _inv_details table
    protected $fillable = [   //table attribute 
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
