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

class EmployeeLeaveController extends Controller
{
    public function employeeLeaveView(){

    $data["allData"] = EmployeeLeave::orderBy("id","desc")->get();
    return view("backend.employee.employeeLeave.employeeLeaveView",$data);

    }

    public function employeeLeaveAdd(){

        if((EmployeeLeave::all()->toArray()) != [])
            $data["employees"] = DB::select('select * from authors where id NOT IN(SELECT employeeId FROM employee_leaves ) AND usertype = "Employee"');
        else
            $data["employees"] = Author::where("usertype","Employee")->get();

        $data["leavePurpose"] = LeavePurpose::all();
        return view("backend.employee.employeeLeave.employeeLeaveAdd",$data);

    }

    public function storeEmployeeLeave(Request $request){
        if($request->purpose == 0){
            $leavePurpose = new LeavePurpose();
            $leavePurpose->name = $request->newPurpose;
            $leavePurpose->save();
            $leavePurposeId = $leavePurpose->id;                    //Point
        }
        else {
            $leavePurposeId = $request->purpose;
        }

        $user = Author::find($request->employeeName);
        $stratDate = explode(" ", $user->created_at)[0];


        $data =  new EmployeeLeave();
        $data->employeeId = $request->employeeName;
        $data->leavePurposeId = $leavePurposeId;
        $data->startDate = $stratDate;
        $data->endDate = date("Y-m-d",strtotime($request->endDate));
        $data->save();

        return $this->employeeLeaveView();
    }

    public function EmployeeLeaveEdit($id){

        $data["editData"] = EmployeeLeave::find($id);
        $data["employees"] = Author::find($data["editData"]->employeeId);
        $data["leavePurpose"] = LeavePurpose::all();

        return view("backend.employee.employeeLeave.employeeLeaveEdit",$data);
    }

    public function updateEmployeeLeave(Request $request,$id){

        if($request->purpose == 0){
            $leavePurpose = new LeavePurpose();
            $leavePurpose->name = $request->newPurpose;
            $leavePurpose->save();
            $leavePurposeId = $leavePurpose->id;                    //Point
        }
        else {
            $leavePurposeId = $request->purpose;
        }

        $data =   EmployeeLeave::find($id);
        $data->leavePurposeId = $leavePurposeId;
        $data->endDate = date("Y-m-d",strtotime($request->endDate));
        $data->save();

        return $this->employeeLeaveView();

    }

    public function deleteEmployeeLeave($id){

        $leave = EmployeeLeave::find($id)->delete();
        return $this->employeeLeaveView();

    }


}
