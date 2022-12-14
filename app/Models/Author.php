<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticateContract;

use App\Models\Designation;

class Author extends Model implements AuthenticateContract
{
    use HasFactory , HasApiTokens , Authenticatable;
    protected $fillable = [
        'usertype',
        'name',
        'email',
        'password',
        'mobile',
        'address',
        'gender',
        'profile_photo',
        'fatherName',
        'motherName',
        'religion',
        'idNO',
        'dateOfBirth',
        'code',
        'role',
        'designationId',
        'joinDate',
        'salary',
        'status',
        'remember_token',
    ];


    public function designation(){

        return $this->belongsTo(Designation::class,"designationId","id");

    }

}
