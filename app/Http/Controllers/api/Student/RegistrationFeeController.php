<?php

namespace App\Http\Controllers\api\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\AssignStudent;
use App\Models\Author;
use App\Models\DiscountStudent;
use App\Models\StudentYear;
use App\Models\FeeCategoryAmount;
use DB;
use PDF;

class RegistrationFeeController extends Controller
{
    public function registrationFeeView(){

        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();

        return view("backend.student.RegistrationFee.regFeeView",$data);


        // for RegistrationFeeView
//        return view("backend.student.RegistrationFee.RegistrationFeeView",$data);

    }

    public function getStudent(Request $request){

        $year_id = $request->year_id;
        $class_id = $request->class_id;
        if ($year_id !='') {
            $where[] = ['yearId','like',$year_id.'%'];
        }
        if ($class_id !='') {
            $where[] = ['classId','like',$class_id.'%'];
        }

        $allStudent = AssignStudent::with(['discount'])->where($where)->get();
        $data = array();
        $color = 'success';
        foreach ($allStudent as $key => $v) {
            $registrationfee = FeeCategoryAmount::where('feeCategoryId','1')->where('classId',$v->classId)->first();
            if($registrationfee != null) {
                $data[$key]["IdNumber"] = $v['student']['idNO'];
                $data[$key]["sName"] = $v['student']['name'];
                $data[$key]["amount"] = $registrationfee->amount . " $";
                $data[$key]["discount"] = $v['discount']['discount'] . ' %';

                $originalfee = $registrationfee->amount;
                $discount = $v['discount']['discount'];
                $discounttablefee = $discount / 100 * $originalfee;
                $finalfee = (float)$originalfee - (float)$discounttablefee;

                $data[$key]["finalfee"] = $finalfee . ' $';
                $data[$key]["a"] = '<a class="btn btn-sm btn-' . $color . '" title="PaySlip" target="_blanks" onclick="window.open(\''.route("web.registrationFeePayslip",["class_id"=>$v->classId,"student_id"=>$v->studentId]) .'\','."'_blank'".')">Fee Slip</a>';
            }
        }

        return response()->json($data);


    }





    public function registrationFeePayslip($class_id,$student_id)
    {
        $studentId = $student_id;
        $classId = $class_id;

        $CheckAuthenticityUser = Author::where("remember_token", $_COOKIE['Authorization'])->first();

        if ($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->usertype == "Employee") {

            $allStudent["details"] = AssignStudent::with(['student', 'discount'])->where("studentId", $studentId)
                ->where("classId", $classId)->first();

            $pdf = PDF::loadView("backend.student.RegistrationFee.RegistrationFeePdf", $allStudent)->setPaper('a4');
            return $pdf->stream("document.pdf");

        }
    }



}
