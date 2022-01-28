<?php

namespace App\Models\InventoryModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _inventories extends Model
{
    use HasFactory;
    //attribute to be fill
    protected $primaryKey = 'inv_ID';   //primary key of _inventories table
    protected $fillable = [         
        'stud_matricID',                //table attribute 
        'stud_name',
        'inv_name',
        'quantity',
        'date',
        'req_status'
    ];
}
