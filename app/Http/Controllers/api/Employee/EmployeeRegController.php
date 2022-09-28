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


class EmployeeRegController extends Controller
{
    public function employeeView(){

        $userLogin = Author::where("remember_token",$_COOKIE['Authorization'])->first();


        $data["allData"] = Author::where("usertype","Employee")->where("id","<>",$userLogin->id)->get();

        return view("backend.employee.employeeReg.employeeView",$data);

    }

    public function employeeAdd(){

        $data["designation"] = Designation::all();
        return view("backend.employee.employeeReg.employeeAdd",$data);

    }

    public function storeEmployeeRegistration(Request $request){

            $request->validate([

                "sName"=>"required",
                "fName"=>"required",
                "mName"=>"required",
                "mobile"=>"required",
                "address"=>"required",
                "gender"=>"required",
                "religion"=>"required",
                "dob"=>"required",
                "designation"=>"required",
                "salary"=>"required",
                "joinDate"=>"required",

            ]);

            DB::transaction(function () use($request){
                $checkYear = date('Ym',strtotime($request->joinDate));
                $employee = Author::where("usertype","Employee")->orderBy("id","DESC")->first();
                $idNumber = "";
                if($employee == null){
                    $firstReg = 0;
                    $employeeId = $firstReg+1;
                    if($employeeId < 10)
                        $idNumber = "000".$employeeId;
                    else if($employeeId < 100)
                        $idNumber = "00".$employeeId;
                    else if($employeeId < 1000)
                        $idNumber = "0".$employeeId;
                }
                else{
                    $employeeId = ($employee->id)+1;
                    if($employeeId < 10)
                        $idNumber = "000".$employeeId;
                    else if($employeeId < 100)
                        $idNumber = "00".$employeeId;
                    else if($employeeId < 1000)
                        $idNumber = "0".$employeeId;
                }
                $finalIdNumber = $checkYear.$idNumber;

                $nameinfo = explode(' ',$request->sName);

                $user = new Author();
                $code = rand(0,9999);
                $user->usertype = "Employee";
                $user->name = $request->sName;
                $user->email = $nameinfo[0].".".$nameinfo[1].$code."@gmail.com";
                $user->password = bcrypt($code);
                $user->fatherName = $request->fName;
                $user->motherName = $request->mName;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->gender = $request->gender;
                $user->religion = $request->religion;
                $user->salary = $request->salary;
                $user->designationId = $request->designation;
                $user->idNO = $finalIdNumber;
                $user->dateOfBirth = date("Y-m-d",strtotime($request->dob));
                $user->joinDate = date("Y-m-d",strtotime($request->joinDate));
                $user->code = $code;

                if(file_exists($request->file('imageStudent'))){
                    $file = $request->file('imageStudent');
                    $name = hexdec(uniqid());
                    $imagName = date("YmdHi").$name.".".(strtolower($file->getClientOriginalExtension()));

                    $data = Carbon::now()->format('Y');
                    $locationDirectory  = 'image\employeePhotos\\';

                    if(!is_dir($locationDirectory.$data)){
                        mkdir($locationDirectory.$data);
                    }

                    $file->move($locationDirectory.$data,$imagName);

                    $user->profile_photo = $locationDirectory.$data."\\".$imagName;
                }
                else{
                    $user->profile_photo = '';
                }

                $user->save();

                $employeeSalary = new EmployeeSalaryLog();
                $employeeSalary->employeeId = $user->id;                              //Has a point
                $employeeSalary->effectedSalary = date("Y-m-d",strtotime($request->joinDate));
                $employeeSalary->previousSalary = $request->salary;
                $employeeSalary->presentSalary = $request->salary;
                $employeeSalary->incrementSalary = "0";
                $employeeSalary->save();

            });

            return $this->employeeView();
        }

        public function employeeRegEdit($id){

            $data["edit"] = Author::find($id);
            $data["designation"] = Designation::all();
            return view("backend.employee.employeeReg.employeeEdit",$data);

        }

        public function updateEmployeeRegistration(Request $request,$id){

//            dd($request->toArray());

            $request->validate([

                "sName"=>"required",
                "fName"=>"required",
                "mName"=>"required",
                "mobile"=>"required",
                "address"=>"required",
                "gender"=>"required",
                "religion"=>"required",
                "dob"=>"required",
                "designation"=>"required",
                "salary"=>"required",
                "joinDate"=>"required",

            ]);

            DB::transaction(function () use($request,$id){

                $user = Author::find($id);
                $user->name = $request->sName;
                $user->fatherName = $request->fName;
                $user->motherName = $request->mName;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->gender = $request->gender;
                $user->religion = $request->religion;
                $user->designationId = $request->designation;
                $user->dateOfBirth = date("Y-m-d",strtotime($request->dob));


                if(file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
//                if(file_exists($request->file('imageStudent'))){
                    $file = $request->file('imageStudent');
                    $name = hexdec(uniqid());
                    $imagName = date("YmdHi").$name.".".(strtolower($file->getClientOriginalExtension()));

                    $data = Carbon::now()->format('Y');
                    $locationDirectory  = 'image\employeePhotos\\';

                    if(!is_dir($locationDirectory.$data)){
                        mkdir($locationDirectory.$data);
                    }
                    if($user->profile_photo != "")
                        unlink($user->profile_photo);

                    $file->move($locationDirectory.$data,$imagName);

                    $user->profile_photo = $locationDirectory.$data."\\".$imagName;
//
                }
                else if(!file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
//                else{
                    $user->profile_photo = '';
//
                }

                $user->save();

            });
            return $this->employeeView();
        }

        public function employeeRegDetails($id){

            $CheckAuthenticityUser =  Author::where("remember_token",$_COOKIE['Authorization'])->first();
            if($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->designationId == 7 ) {

                $data["details"] = Author::find($id);


                $pdf = PDF::loadView("backend.employee.employeeReg.employeeDetailsPdf", $data);
                return $pdf->stream("document.pdf");

            }

        }





}
