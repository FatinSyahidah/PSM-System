<?php

namespace App\Models\ProfileModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecturer extends Authenticatable
{
    use Notifiable;
    protected $guard = 'lecturer';
    protected $primaryKey = 'lect_id';
    protected $fillable = [
        'name',
        'lect_staffID',
        'lect_field',
        'lect_officeNum',
        'lect_hpNum',
        'email',
        'password',
        'lect_add',
        'lect_expertise',
        'lect_profilePic'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
