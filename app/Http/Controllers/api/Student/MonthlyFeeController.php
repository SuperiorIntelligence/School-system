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

class MonthlyFeeController extends Controller
{
    public function monthlyFeeView(){

        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();

        return view("backend.student.MonthlyFee.monthlyFeeView",$data);

    }

    public function getStudentMonthly(Request $request){


        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $month = $request->month;
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
            $Monthlyfee = FeeCategoryAmount::where('feeCategoryId','2')->where('classId',$v->classId)->first();
            if($Monthlyfee != null) {
                $data[$key]["IdNumber"] = $v['student']['idNO'];
                $data[$key]["sName"] = $v['student']['name'];
                $data[$key]["amount"] = $Monthlyfee->amount . " $";
                $data[$key]["discount"] = $v['discount']['discount'] . ' %';

                $originalfee = $Monthlyfee->amount;
                $discount = $v['discount']['discount'];
                $discounttablefee = $discount / 100 * $originalfee;
                $finalfee = (float)$originalfee - (float)$discounttablefee;

                $data[$key]["finalfee"] = $finalfee . ' $';
                $data[$key]["a"] = '<a class="btn btn-sm btn-' . $color . '" title="PaySlip" target="_blanks" onclick="window.open(\''.route("web.monthlyFeePayslip",["class_id"=>$v->classId,"student_id"=>$v->studentId,"month"=>$month]) .'\','."'_blank'".')">Fee Slip</a>';
            }
        }

        return response()->json($data);

    }

    public function monthlyFeePayslip($class_id,$student_id,$month)
    {
        $studentId = $student_id;
        $classId = $class_id;
        $allStudent["month"] = $month;

        $CheckAuthenticityUser = Author::where("remember_token", $_COOKIE['Authorization'])->first();

        if ($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->usertype == "Employee") {

            $allStudent["details"] = AssignStudent::with(['student', 'discount'])->where("studentId", $studentId)
                ->where("classId", $classId)->first();

            $pdf = PDF::loadView("backend.student.MonthlyFee.monthlyFeePdf", $allStudent);
            return $pdf->stream("document.pdf");

        }
    }

}
