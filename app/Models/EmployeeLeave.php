<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(Author::class,"employeeId","id");
    }
    public function purpose(){
        return $this->belongsTo(LeavePurpose::class,"leavePurposeId","id");
    }



}
