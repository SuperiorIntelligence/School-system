<?php

namespace App\Http\Controllers\api\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeLeave;
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
use Illuminate\Support\Carbon;
use PDF;

use App\Models\EmployeeSalaryLog;
use App\Models\Designation;

use App\Models\EmployeeAttendance;

class MonthlySalaryController extends Controller
{
    public function employeeMonthlySalaryView(){

        return view('backend.employee.employeeMonthlySalary.employeeMonthlySalaryView');

    }

    public function employeeMonthlySalaryGet(Request $request){
        $AttendDate = date("Y-m",strtotime($request->AttendDate));
        if ($AttendDate !='') {
            $where[] = ['date','like',$AttendDate.'%'];
        }
        $dataEmployee = EmployeeAttendance::with(['user'])->select("employeeId")->groupBy("employeeId")->where($where)->get();

        $data = array();
        $color = 'success';
        foreach ($dataEmployee as $key => $v) {
            $total = EmployeeAttendance::with(['user'])->where($where)->where("employeeId",$v->employeeId)->get();
//            $leave = EmployeeLeave::where('endDate','like',$AttendDate.'%')->where("employeeId",$v->employeeId)->first();
            $absent = count($total->where("attendStatus","Absent"));
            if($total != null) {
//            if($total != null and $leave == "" ){
                $data[$key]["name"] = $v['user']['name'];
                $data[$key]["salary"] = $v['user']['salary'];

                $salary = (float)$v["user"]["salary"];
                $salaryperday = (float)$salary/30;
                $totalSalaryminus = (float)$absent*(float)$salaryperday;
                $totalSalary = (float)$salary - (float)$totalSalaryminus;

                $data[$key]["monthSalary"] = $totalSalary . ' $';
                $data[$key]["a"] = '<a class="btn btn-sm btn-' . $color . '" title="PaySlip" target="_blanks" onclick="window.open(\''.route("web.employeeMonthlySalaryPayslip",["employeeId"=>$v->employeeId,"date"=>$AttendDate]) .'\','."'_blank'".')">Fee Slip</a>';
            }
        }

        return response()->json($data);
    }

    public function employeeMonthlySalaryPayslip($employeeId,$date){
        $CheckAuthenticityUser = Author::where("remember_token", $_COOKIE['Authorization'])->first();

        if ($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->designationId == 7) {
            $id= EmployeeAttendance::where('date','like',$date.'%')->where("employeeId",$employeeId)->first();
            $AttendDate = date("Y-m",strtotime($id->date));
            if ($AttendDate !='') {
                $where[] = ['date','like',$AttendDate.'%'];
            }
            $data["details"] = EmployeeAttendance::with(["user"])->where($where)->where("employeeId",$id->employeeId)->get();
//            $allStudent["details"] = AssignStudent::with(['student', 'discount'])->where("studentId", $studentId)
//                ->where("classId", $classId)->first();

            $pdf = PDF::loadView("backend.employee.employeeMonthlySalary.employeeMonthlySalaryPdf", $data);
            return $pdf->stream("document.pdf");
        }
    }
}
