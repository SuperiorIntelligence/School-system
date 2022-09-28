<?php

namespace App\Http\Controllers\api\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\EmployeeAttendance;

use DB;
use Illuminate\Support\Carbon;
use PDF;


class AttenReportController extends Controller
{
    public function AttendanceReportView(){
        $data["Employees"] = Author::where("usertype","Employee")->get();
        return view("backend.employee.AttendanceReport.employeeAttendanceReportView",$data);

    }
    public function attendanceReportGet(Request $request){
        $employeeId= $request->employeeId;
        if($employeeId !=''){
            $where[] = ["employeeId",$employeeId];
        }
        $date = date("Y-m-01",strtotime($request->date));
        if($date != ''){
            $where[] = ["date",">=",$date];
            $where[] = ["date","<=",$request->date];
        }

        $color = "success";

        $data = EmployeeAttendance::with(["user"])->where($where)->get();
        $dive = '<a class="btn btn-sm btn-' . $color . '" title="PaySlip" target="_blanks" onclick="window.open(\''.route("web.employeeAttendanceReportPayslip",["employeeId"=>$employeeId,"date"=>$request->date]) .'\','."'_blank'".')">Fee Slip</a>';

        return response()->json([$data,$dive]);

    }

    public function employeeAttendanceReportPayslip($employeeId,$date){

        $CheckAuthenticityUser =  Author::where("remember_token",$_COOKIE['Authorization'])->first();
        if($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->usertype == "Employee" ) {

            if($employeeId !=''){
                $where[] = ["employeeId",$employeeId];
            }
            $dateFirst = date("Y-m-01",strtotime($date));
            if($date != ''){
                $where[] = ["date",">=",$dateFirst];
                $where[] = ["date","<=",$date];
            }
            $data["allData"] = EmployeeAttendance::with(["user"])->where($where)->get();

            $data["absent"] = EmployeeAttendance::with(["user"])->where($where)->where("attendStatus","Absent")
                ->get()->count();

            $data["present"] = EmployeeAttendance::with(["user"])->where($where)->where("attendStatus","Present")
                ->get()->count();

            $data["SDate"] = date("01-m-Y",strtotime($date));
            $data["EDate"] = date("d-m-Y",strtotime($date));

            $pdf = PDF::loadView("backend.employee.AttendanceReport.employeeAttendanceReportPDF", $data);
            return $pdf->stream("document.pdf");

        }

    }
}
