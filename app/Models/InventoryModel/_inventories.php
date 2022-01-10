<?php

namespace App\Models\InventoryModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _inventories extends Model
{
    use HasFactory;
    protected $primaryKey = 'inv_ID';
    protected $fillable = [
        'stud_matricID',
        'stud_name',
        'inv_name',
        'quantity',
        'date',
        'req_status'
    ];
}
