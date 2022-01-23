<?php

namespace App\Models\ProfileModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\ProposalModel\proposals;


class student extends  Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'student';
    protected $primaryKey = 'stud_id';
    protected $fillable = [
        'name',
        'stud_matricID',
        'stud_course',
        'stud_year',
        'stud_hpNum',
        'email',
        'password',
        'stud_cpassword',
        'stud_add',
        'stud_advisor',
        'stud_psmTitle',
        'stud_psmPhase',
        'stud_profilePic'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposals()
    {
        return $this->hasMany(proposals::class, 'name', 'stud_matricID', 'stud_advisor', 'stud_id');
    }
}
