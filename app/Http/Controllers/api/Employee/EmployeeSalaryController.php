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

class EmployeeSalaryController extends Controller
{
    public function employeeSalaryView(){

        $data["allData"] = Author::where("usertype","Employee")->get();
        return view("backend.employee.employeeSalary.employeeSalaryView",$data);

    }

    public function employeeSalaryIncrement($id){

        $data["editData"] = Author::find($id);
        return view("backend.employee.employeeSalary.employeeSalaryIncrement",$data);

    }

    public function updateIncrementSalary(Request $request,$id){
//        print_r($request->effectedSalary);
//        dd($request->incrementSalary);
        $user = Author::find($id);
        $salary = $user->salary;
        $presentSalary = (float)$salary + (float)$request->incrementSalary;
        $user->salary = $presentSalary;
        $user->save();

        $salaryData  = new EmployeeSalaryLog();
        $salaryData->employeeId = $id;
        $salaryData->previousSalary = $salary;
        $salaryData->incrementSalary = $request->incrementSalary;
        $salaryData->presentSalary = $presentSalary;
        $salaryData->effectedSalary = date("Y-m-d",strtotime($request->effectedSalary));
        $salaryData->save();

        return $this->employeeSalaryView();

    }

    public function employeeSalaryDetails($id){

        $CheckAuthenticityUser =  Author::where("remember_token",$_COOKIE['Authorization'])->first();
        if($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->designationId == 7 ) {
            $data["details"] = Author::find($id);
            $data["salaryLog"] = EmployeeSalaryLog::where("employeeId", $data["details"]->id)->get();
            $pdf = PDF::loadView("backend.employee.employeeSalary.employeeSalaryDetails", $data);
            return $pdf->stream("document.pdf");
        }
    }
}
