<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(Author::class,"studentId","id");
    }

    public function studentClass(){
        return $this->belongsTo(StudentClass::class,"classId","id");
    }

    public function studentYear(){
        return $this->belongsTo(StudentYear::class,"yearId","id");
    }

    public function discount(){
        return $this->belongsTo(DiscountStudent::class,"id","assignStudentId");
    }

    public function group(){
        return $this->belongsTo(StudentGroup::class,"groupId","id");
    }

    public function shift(){
        return $this->belongsTo(StudentShift::class,"shiftId","id");
    }
}
