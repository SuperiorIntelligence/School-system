<?php

namespace App\Http\Controllers\api\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\User;

use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\Author;
use App\Models\DiscountStudent;
use App\Models\StudentYear;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
use PDF;


class StudentRegistrationController extends Controller
{
    public function studentRegistrationView(){

        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["allData"] = AssignStudent::all();
        return view("backend.student.studentReg.studentView",$data);

    }

    public function studentRegAdd(){


        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["groups"] = StudentGroup::all();
        $data["shifts"] = StudentShift::all();
        return view("backend.student.studentReg.studentRegAdd",$data);

    }

    public function storeStudentRegistration(Request $request){
        $request->validate([

            "sName"=>"required",
            "fName"=>"required",
            "mName"=>"required",
            "mobile"=>"required",
            "address"=>"required",
            "gender"=>"required",
            "religion"=>"required",
            "dob"=>"required",
            "discount"=>"required",
            "year"=>"required",
            "studentClass"=>"required",
            "group"=>"required",
            "shift"=>"required",

        ]);

        DB::transaction(function () use($request){
        $checkYear = StudentYear::find($request->year)->name;
        $student = Author::where("usertype","Student")->orderBy("id","DESC")->first();
        $idNumber = "";
        if($student == null){
            $firstReg = 0;
            $studentId = $firstReg+1;
            if($studentId < 10)
                $idNumber = "000".$studentId;
            else if($studentId < 100)
                $idNumber = "00".$studentId;
            else if($studentId < 1000)
                $idNumber = "0".$studentId;
        }
        else{
            $studentId = ($student->id)+1;
            if($studentId < 10)
                $idNumber = "000".$studentId;
            else if($studentId < 100)
                $idNumber = "00".$studentId;
            else if($studentId < 1000)
                $idNumber = "0".$studentId;
        }
        $finalIdNumber = $checkYear.$idNumber;

        $infoName = explode(' ' ,$request->sName);

        $user = new Author();
        $code = rand(0,9999);
        $user->usertype = "Student";
        $user->name = $request->sName;
        $user->email = $infoName[0].".".$infoName[1].$code."@gmail.com";
        $user->password = bcrypt($code);
        $user->fatherName = $request->fName;
        $user->motherName = $request->mName;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->religion = $request->religion;
        $user->idNO = $finalIdNumber;
        $user->dateOfBirth = date("Y-m-d",strtotime($request->dob));
        $user->code = $code;
        $user->role = "Student";

        if(file_exists($request->file('imageStudent'))){
            $file = $request->file('imageStudent');
            $name = hexdec(uniqid());
            $imagName = date("YmdHi").$name.".".(strtolower($file->getClientOriginalExtension()));

            $data = Carbon::now()->format('Y');
            $locationDirectory  = 'image\studentPhotos\\';

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

        $assignStudent = new AssignStudent();
        $assignStudent->studentId = $user->id;                              //Has a point
        $assignStudent->yearId = $request->year;
        $assignStudent->classId = $request->studentClass;
        $assignStudent->groupId = $request->group;
        $assignStudent->shiftId = $request->shift;
        $assignStudent->save();

        $discountStudents  = new DiscountStudent();
        $discountStudents->assignStudentId = $assignStudent->id;                //Has a point
        $discountStudents->feeCategoryId = "1";
        $discountStudents->discount  = $request->discount;
        $discountStudents->save();


        });

        return $this->studentRegistrationView();

    }

    public function searchData(Request $request){
        $data["selectYear"] = $request->searchYear;
        $data["selectClass"] = $request->searchClass;
        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();

        if($request->searchYear != null && $request->searchClass != null){
            $data["allData"] = AssignStudent::where("classId",$request->searchClass)->where("yearId",$request->searchYear)->get();
        }
        else if($request->searchYear!=null){
            $data["allData"] = AssignStudent::where("yearId",$request->searchYear)->get();
        }
        else if($request->searchClass != null){
            $data["allData"] = AssignStudent::where("classId",$request->searchClass)->get();
        }
        else
            $data["allData"] = AssignStudent::all();

        return view("backend.student.studentReg.studentView",$data);

    }

    public function studentRegEdit($id){

        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["groups"] = StudentGroup::all();
        $data["shifts"] = StudentShift::all();

        $data["editData"] = AssignStudent::with(["student","discount"])->where("studentId",$id)->first();           //Has a point



        return view("backend.student.studentReg.studentRegEdit",$data);

    }

    public function updateStudentRegistration(Request $request,$studentId,$id){
//dd($request->toArray());
        $request->validate([

            "sName"=>"required",
            "fName"=>"required",
            "mName"=>"required",
            "mobile"=>"required",
            "address"=>"required",
            "gender"=>"required",
            "religion"=>"required",
            "dob"=>"required",
            "discount"=>"required",
            "year"=>"required",
            "studentClass"=>"required",
            "group"=>"required",
            "shift"=>"required",

        ]);

        DB::transaction(function () use($request,$studentId,$id){

            $user =  Author::where("id",$studentId)->first();
            $user->name = $request->sName;
            $user->fatherName = $request->fName;
            $user->motherName = $request->mName;
            $user->mobile = $request->mobile;
            $user->address = $request->address;
            $user->gender = $request->gender;
            $user->religion = $request->religion;
            $user->dateOfBirth = date("Y-m-d",strtotime($request->dob));

            if(file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
                $file = $request->file('imageStudent');
                $name = hexdec(uniqid());
                $imagName = date("YmdHi").$name.".".(strtolower($file->getClientOriginalExtension()));

                $data = Carbon::now()->format('Y');
                $locationDirectory  = 'image\studentPhotos\\';

                if(!is_dir($locationDirectory.$data)){
                    mkdir($locationDirectory.$data);
                }
                unlink($user->profile_photo);

                $file->move($locationDirectory.$data,$imagName);

                $user->profile_photo = $locationDirectory.$data."\\".$imagName;
            }
            else if(!file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
                $user->profile_photo = '';
            }

            $user->save();

            $assignStudent =  AssignStudent::where("id",$id)->where("studentId",$studentId)->first();

            $assignStudent->yearId = $request->year;
            $assignStudent->classId = $request->studentClass;
            $assignStudent->groupId = $request->group;
            $assignStudent->shiftId = $request->shift;
            $assignStudent->save();

            $discountStudents  = DiscountStudent::where("assignStudentId",$id)->first();
            $discountStudents->discount  = $request->discount;
            $discountStudents->save();


        });

        return $this->studentRegistrationView();

    }

    public function studentRegPromotion($id){

        $data["years"] = StudentYear::all();
        $data["classes"] = StudentClass::all();
        $data["groups"] = StudentGroup::all();
        $data["shifts"] = StudentShift::all();

        $data["editData"] = AssignStudent::with(["student","discount"])->where("studentId",$id)->first();           //Has a point

        return view("backend.student.studentReg.studentRegPromotion",$data);

    }

    public function promotionStudentRegistration(Request $request,$studentId,$id){

        $request->validate([

            "sName"=>"required",
            "fName"=>"required",
            "mName"=>"required",
            "mobile"=>"required",
            "address"=>"required",
            "gender"=>"required",
            "religion"=>"required",
            "dob"=>"required",
            "discount"=>"required",
            "year"=>"required",
            "studentClass"=>"required",
            "group"=>"required",
            "shift"=>"required",

        ]);

        DB::transaction(function () use($request,$studentId,$id){

            $user =  Author::where("id",$studentId)->first();
            $user->name = $request->sName;
            $user->fatherName = $request->fName;
            $user->motherName = $request->mName;
            $user->mobile = $request->mobile;
            $user->address = $request->address;
            $user->gender = $request->gender;
            $user->religion = $request->religion;
            $user->dateOfBirth = date("Y-m-d",strtotime($request->dob));

            if(file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
                $file = $request->file('imageStudent');
                $name = hexdec(uniqid());
                $imagName = date("YmdHi").$name.".".(strtolower($file->getClientOriginalExtension()));

                $data = Carbon::now()->format('Y');
                $locationDirectory  = 'image\studentPhotos\\';

                if(!is_dir($locationDirectory.$data)){
                    mkdir($locationDirectory.$data);
                }
                unlink($user->profile_photo);

                $file->move($locationDirectory.$data,$imagName);

                $user->profile_photo = $locationDirectory.$data."\\".$imagName;
            }
            else if(!file_exists($request->file('imageStudent')) && !isset($request->flagImage)){
                $user->profile_photo = '';
            }

            $user->save();

            $assignStudent =  new AssignStudent();
            $assignStudent->studentId = $studentId;
            $assignStudent->yearId = $request->year;
            $assignStudent->classId = $request->studentClass;
            $assignStudent->groupId = $request->group;
            $assignStudent->shiftId = $request->shift;
            $assignStudent->save();

            $discountStudents  = new DiscountStudent();
            $discountStudents->assignStudentId = $assignStudent->id;                //Has a point
            $discountStudents->feeCategoryId = "1";
            $discountStudents->discount  = $request->discount;
            $discountStudents->save();


        });

        return $this->studentRegistrationView();

    }


    public function studentRegDetails($id){
//dd("hey");
        $CheckAuthenticityUser =  Author::where("remember_token",$_COOKIE['Authorization'])->first();

        if($CheckAuthenticityUser->usertype == "Admin" or $CheckAuthenticityUser->usertype == "Employee" ){

        $data["details"] = AssignStudent::with(["student","discount"])->where("studentId",$id)->first();           //Has a point
        view()->share('employee',$data);
        $pdf = PDF::loadView("backend.student.studentReg.studentDetailsPdf",$data)->setPaper('a4');
        return $pdf->stream("document.pdf");
//        return $pdf->download("document.pdf");
        }
    }


}
