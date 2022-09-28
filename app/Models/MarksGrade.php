<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarksGrade extends Model
{
    use HasFactory;

    public function gName(){
        return $this->belongsTo(GradeName::class,"gradeName","id");
    }
}
