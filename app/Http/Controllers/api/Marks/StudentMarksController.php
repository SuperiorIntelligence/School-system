<?php

namespace App\Http\Controllers\api\Marks;

use App\Http\Controllers\Controller;
use App\Models\ExamType;
use App\Models\StudentClass;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class StudentMarksController extends Controller
{
    public function studentMarksView(){
        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["ExamType"] = ExamType::all();

        return view('backend.marks.studentMarks.studentMarksView',$data);
    }
    public function MarksView(){
        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["ExamType"] = ExamType::all();

        return view('backend.marks.studentMarks.viewMarksForStudent',$data);
    }
}
