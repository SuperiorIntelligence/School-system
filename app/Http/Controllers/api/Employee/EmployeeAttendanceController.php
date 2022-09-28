<?php

namespace App\Http\Controllers\api\Employee;

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
use Illuminate\Support\Carbon;
use PDF;

use App\Models\EmployeeSalaryLog;
use App\Models\Designation;

use App\Models\EmployeeLeave;
use App\Models\LeavePurpose;
use App\Models\EmployeeAttendance;

class EmployeeAttendanceController extends Controller
{
    public function employeeAttendanceView(){
//        $data["allData"] = EmployeeAttendance::orderBy("id","DESC")->get();
        $data["allData"] = EmployeeAttendance::select("date")->groupBy("date")->orderBy("date","DESC")->get();
        return view("backend.employee.employeeAttendance.employeeAttendanceView",$data);
    }

    public function employeeAttendanceAdd(){

//    $data["Employees"] = Author::where("usertype","Employee")->get();
    $leaves = EmployeeLeave::select("employeeId")->get();
    $data["Employees"] = Author::where("usertype","Employee")->whereNotIn("id",$leaves)->get();
//    $date["infoData"] = date("m-d-Y",strtotime(Carbon::now()));

    return view("backend.employee.employeeAttendance.employeeAttendanceAdd",$data);
    }

    public function storeEmployeeAttendance(Request $request){

        EmployeeAttendance::where("date",date("Y-m-d",strtotime($request->date)))->delete();

        $status = explode(",",$request->status);
        $id = explode(",",$request->employeeId);
        $count = count($status);
        for($i=0;$i<$count;$i++){
            $attend = new EmployeeAttendance();
            $attend->date = date("Y-m-d",strtotime($request->date)) ;
            $attend->employeeId = $id[$i];
            $attend->attendStatus = $status[$i];
            $attend->save();
        }
        return $this->employeeAttendanceView();
    }

    public function employeeAttendanceEdit($date){
        $data["editData"] = EmployeeAttendance::where("date",$date)->get();
        $data["Employees"] = Author::where("usertype","Employee")->get();
        return view("backend.employee.employeeAttendance.employeeAttendanceEdit",$data);
    }

    public function employeeAttendanceDetails($date){
        $data["details"] = EmployeeAttendance::where("date",$date)->get();
        return view("backend.employee.employeeAttendance.employeeAttendanceDetails",$data);
    }
}
