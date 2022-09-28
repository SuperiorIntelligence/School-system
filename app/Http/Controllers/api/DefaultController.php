<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\GradeName;
use App\Models\MarksGrade;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\AssignStudent;
use App\Models\Author;
use App\Models\DiscountStudent;
use App\Models\StudentYear;
use DB;
use PDF;
use Illuminate\Support\Carbon;

use App\Models\ExamType;
use App\Models\StudentMarks;
use App\Models\AssignSubject;

class DefaultController extends Controller
{
    public function getSubject(Request $request){
    $classId = $request->class_id;
    $allData = AssignSubject::with(["schoolSubject"])->where("classId",$classId)->get();
    return response()->json($allData);
    }

    public function getStudents(Request $request){
//        $request->validate([
//            "year_id"=>"required",
//            "class_id"=>"required",
//            "subject"=>"required",
//            "examType"=>"required",
//        ]);

        $yearId = $request->year_id;
        $classId = $request->class_id;
        $subject = $request->subject;
        $examType = $request->examType;
//        $allData = AssignStudent::with(["student"])->where("yearId",$yearId)->where("classId",$classId)->get();
        $allData = DB::select("SELECT * FROM assign_students LEFT JOIN authors as user
                   ON(assign_students.studentId = user.id) where assign_students.studentId
                    NOT IN(SELECT studentId FROM student_marks where yearId = ".$yearId." and classId= ".$classId."
                    and assignSubjectId= ".$subject." and examTypeId= ".$examType.") and assign_students.yearId = ".$yearId."
                     and assign_students.classId = ".$classId."; ");
        return response()->json($allData);
    }

    public function getStudentName(Request $request){
        $where[] = ["yearId",$request->yearId];
        $where[] = ["classId",$request->classId];
        $where[] = ["assignSubjectId",$request->subject];
        $where[] = ["examTypeId",$request->examType];

        $studentId = StudentMarks::select("studentId")->where($where)->get();
        $allData = Author::whereIn("id",$studentId)->get();
        return response()->json($allData);
    }

    public function DisplayStudentMark(Request $request){

        $where[] = ["yearId",$request->year_id];
        $where[] = ["classId",$request->class_id];
        $where[] = ["assignSubjectId",$request->subject];
        $where[] = ["examTypeId",$request->examType];
        $where[] = ["studentId",$request->studentName];

        $allData = StudentMarks::with(["student"])->where($where)->get();

        $gradeWhere[] =["startMark","<=",(int)$allData[0]->Marks];
        $gradeWhere[] =["endMark",">=",(int)$allData[0]->Marks];
        $gradeMarks = MarksGrade::select("gradeName")->where($gradeWhere)->get();
        $gradeName = GradeName::where("id",$gradeMarks[0]->gradeName)->get();

        return response()->json([$allData,$gradeName]);


    }

    public function DisplayMarkForStudent(Request $request){

        $student = Author::where("remember_token", $_COOKIE['Authorization'])->first();

        $where[] = ["yearId",$request->year_id];
        $where[] = ["classId",$request->class_id];
        $where[] = ["assignSubjectId",$request->subject];
        $where[] = ["examTypeId",$request->examType];
        $where[] = ["studentId",$student->id];


        $allData = StudentMarks::with(["student"])->where($where)->get();

//        $gradeWhere[] =["startMark","<=",(int)$allData[0]->Marks];
//        $gradeWhere[] =["endMark",">=",(int)$allData[0]->Marks];
//        $gradeMarks = MarksGrade::select("gradeName")->where($gradeWhere)->get();
//        $gradeName = GradeName::where("id",$gradeMarks[0]->gradeName)->get();



//        return response()->json([$allData,$gradeName]);
        return response()->json([$allData]);


    }

}
