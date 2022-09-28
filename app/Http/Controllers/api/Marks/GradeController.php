<?php

namespace App\Http\Controllers\api\Marks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//
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
use App\Models\MarksGrade;
use App\Models\GradeName;

class GradeController extends Controller
{
    public function marksGradeView(){

        $data["allData"] = MarksGrade::with(["gName"])->orderBy("gradeName","ASC")->get();
        return view('backend.marks.gradeMarksView',$data);

    }

    public function markGradeAdd(){
        $data["gradeName"] = GradeName::all();
        return view('backend.marks.gradeMarksAdd',$data);
    }

    public function markGradeStore(Request $request){

        $data = new MarksGrade();
        $data->gradeName = $request->gardeName;
        $data->gradePoint = $request->gardePoint;
        $data->startMark = $request->startMark;
        $data->endMark = $request->endMark;
        $data->startPoint = $request->startPoint;
        $data->endPoint = $request->endPoint;
        $data->remark = $request->remark;
        $data->save();

        return $this->marksGradeView();

    }

    public function markGradeEdit($id){

        $data["gradeName"] = GradeName::all();
        $data["editData"] = MarksGrade::find($id);
        return view('backend.marks.gradeMarksEdit',$data);

    }

    public function markGradeUpdate(Request $request,$id){

        $data =  MarksGrade::find($id);
        $data->gradeName = $request->gardeName;
        $data->gradePoint = $request->gardePoint;
        $data->startMark = $request->startMark;
        $data->endMark = $request->endMark;
        $data->startPoint = $request->startPoint;
        $data->endPoint = $request->endPoint;
        $data->remark = $request->remark;
        $data->save();

        return $this->marksGradeView();

    }

}
