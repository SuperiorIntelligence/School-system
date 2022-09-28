<?php

namespace App\Http\Controllers\api\Marks;

use App\Http\Controllers\Controller;
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

class MarksController extends Controller
{
    public function marksAdd(){
        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["ExamType"] = ExamType::all();

        return view('backend.marks.marksAdd',$data);
    }
    public function marksStore(Request $request){

        $request->validate([
            "year"=>"required",
            "class"=>"required",
            "classSubject"=>"required",
            "examType"=>"required",
        ]);

        $year = $request->year;
        $class = $request->class;
        $classSubject = $request->classSubject;
        $examType = $request->examType;
        $studentId = explode(",",$request->studentId);
        $numberMarks = explode(",",$request->numberMarks);
        $idNumber = explode(",",$request->idNumber);

        for($i = 0 ;$i<count($studentId);$i++){
            $data = new StudentMarks();
            $data->studentId = $studentId[$i];
            $data->idNO = $idNumber[$i];
            $data->yearId = $year;
            $data->classId = $class;
            $data->assignSubjectId = $classSubject;
            $data->examTypeId = $examType;
            $data->marks = $numberMarks[$i];
            $data->save();

        }
        return $this->marksAdd();
    }

    public function marksEdit(){
        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["ExamType"] = ExamType::all();

        return view('backend.marks.marksEdit',$data);
    }

    public function marksEditStore(Request $request){

        $request->validate([
            "year_id"=>"required",
            "class_id"=>"required",
            "subject"=>"required",
            "examType"=>"required",
        ]);

        $year = $request->year_id;
        $class = $request->class_id;
        $classSubject = $request->subject;
        $examType = $request->examType;

        $data = StudentMarks::with(["student"])->where("yearId",$year)->where("classId",$class)
                    ->where("assignSubjectId",$classSubject)->where("examTypeId",$examType)->get();

        return response()->json($data);
    }

    public function marksEntryUpdate(Request $request){


        $request->validate([
            "year"=>"required",
            "class"=>"required",
            "classSubject"=>"required",
            "examType"=>"required",
        ]);

        $year = $request->year;
        $class = $request->class;
        $classSubject = $request->classSubject;
        $examType = $request->examType;
        $studentId = explode(",",$request->studentId);
        $numberMarks = explode(",",$request->numberMarks);
        $idNumber = explode(",",$request->idNumber);

        foreach ($studentId as $key => $value ){

            $find = StudentMarks::where("yearId",$year)->where("classId",$class)->where("assignSubjectId",$classSubject)->where("examTypeId",$examType)
                    ->where("studentId",$value)->first();

            if($find->toArray()){
                if($find->Marks != $numberMarks[$key]){
                    $find->Marks = $numberMarks[$key];
                    $find->save();
                }
            }
        }
        return $this->marksEdit();
    }
}
