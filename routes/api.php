<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\Setup\StudentClassController;
use App\Http\Controllers\api\Setup\StudentYearController;
use App\Http\Controllers\api\Setup\StudentGroupController;
use App\Http\Controllers\api\Setup\StudentShiftController;
use App\Http\Controllers\api\Setup\FeeCategoryController;
use App\Http\Controllers\api\Setup\FeeAmountController;
use App\Http\Controllers\api\Setup\ExamTypeController;
use App\Http\Controllers\api\Setup\SchoolSubjectController;
use App\Http\Controllers\api\Setup\AssignSubjectController;
use App\Http\Controllers\api\Setup\DesignationController;

                                                            // Student

use App\Http\Controllers\api\Student\StudentRegistrationController;
use App\Http\Controllers\api\Student\RegistrationFeeController;
use App\Http\Controllers\api\Student\MonthlyFeeController;
use App\Http\Controllers\api\Student\ExamFeeController;

                                                            // Employee

use App\Http\Controllers\api\Employee\EmployeeRegController;
use App\Http\Controllers\api\Employee\EmployeeSalaryController;
use App\Http\Controllers\api\Employee\EmployeeLeaveController;
use App\Http\Controllers\api\Employee\EmployeeAttendanceController;
use App\Http\Controllers\api\Employee\MonthlySalaryController;


                                                            //Marks
use App\Http\Controllers\api\Marks\MarksController;
use App\Http\Controllers\api\Marks\GradeController;
use App\Http\Controllers\api\Marks\StudentMarksController;

use App\Http\Controllers\api\DefaultController;

                                                           //Report
use App\Http\Controllers\api\Report\AttenReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//See User


//Route::get("main",function (){
////    return view("admin.index",["url"=>"","method"=>"","location"=>""]);
//    return view("pageLoad.main",['url'=>'mainPage','method'=>'GET','location'=>'end']);
//})->name("main");








//See User


Route::post("register",[AuthorController::class,"register"])->name('api.register');




Route::post("login",[AuthorController::class,"login"])->name("api.login");


Route::group(["middleware"=>"auth:api"],function (){

    Route::get("mainPage",[AuthorController::class,"mainPage"])->name("mainPage");
    Route::get("logout",[AuthorController::class,"logout"])->name("api.logout");


    //S User Management
    Route::prefix("user")->group(function (){
        Route::get("/view",[AuthorController::class,"userView"])->name("api.userview");
        Route::get("/add",[AuthorController::class,"userAdd"])->name("api.userAdd");
        Route::post("/store",[AuthorController::class,"userStore"])->name("api.userStore");
        Route::get("/edit/{id}",[AuthorController::class,"userEdit"])->name("api.editUser");
        Route::post("/update/{id}",[AuthorController::class,"userUpdate"])->name("api.userUpdate");
        Route::get("/delete/{id}",[AuthorController::class,"userDelete"])->name("api.deleteUser");
    });

    //E
    //-------------------------------------------------

    //S User Profile and Change Password
    Route::prefix("profile")->group(function (){
        Route::get("/view",[ProfileController::class,"profileView"])->name("api.profileView");
        Route::post("/store/{id}",[ProfileController::class,"updateProfile"])->name("api.updateProfile");
        Route::get("/change/password",[ProfileController::class,"changePassword"])->name("api.changePassword");
        Route::post("/password",[ProfileController::class,"passwordUpdate"])->name("api.passwordUpdate");
    });
    //E
    //-------------------------------------------------

    //S Setups
    Route::prefix("setups")->group(function (){
                                                    //Student class
        Route::get("/student/class/view",[StudentClassController::class,"studentClassView"])->name("api.studentClassView");
        Route::get("/student/class/add",[StudentClassController::class,"studentClassAdd"])->name("api.studentClassAdd");
        Route::post("/store/studentClass",[StudentClassController::class,"storeStudentClass"])->name("api.storeStudentClass");
        Route::get("/edit/studentClass/{id}",[StudentClassController::class,"studentClassEdit"])->name("api.studentClassEdit");
        Route::post("/update/studentClass/{id}",[StudentClassController::class,"updateStudentClass"])->name("api.updateStudentClass");
        Route::get("/delete/studentClass/{id}",[StudentClassController::class,"deleteStudentClass"])->name("api.deleteStudentClass");

                                                    //Student Year
        Route::get("/student/year/view",[StudentYearController::class,"studentYearView"])->name("api.studentYearView");
        Route::get("/student/year/add",[StudentYearController::class,"studentYearAdd"])->name("api.studentYearAdd");
        Route::post("/store/studentYear",[StudentYearController::class,"storeStudentYear"])->name("api.storeStudentYear");
        Route::get("/edit/studentYear/{id}",[StudentYearController::class,"studentYearEdit"])->name("api.studentYearEdit");
        Route::post("/update/studentYear/{id}",[StudentYearController::class,"updateStudentYear"])->name("api.updateStudentYear");
        Route::get("/delete/studentYear/{id}",[StudentYearController::class,"deleteStudentYear"])->name("api.deleteStudentYear");

                                                    //Student Group
        Route::get("/student/group/view",[StudentGroupController::class,"studentGroupView"])->name("api.studentGroupView");
        Route::get("/student/group/add",[StudentGroupController::class,"studentGroupAdd"])->name("api.studentGroupAdd");
        Route::post("/store/studentGroup",[StudentGroupController::class,"storeStudentGroup"])->name("api.storeStudentGroup");
        Route::get("/edit/studentGroup/{id}",[StudentGroupController::class,"studentGroupEdit"])->name("api.studentGroupEdit");
        Route::post("/update/studentGroup/{id}",[StudentGroupController::class,"updateStudentGroup"])->name("api.updateStudentGroup");
        Route::get("/delete/studentGroup/{id}",[StudentGroupController::class,"deleteStudentGroup"])->name("api.deleteStudentGroup");

                                                    // Student Shift
        Route::get("/student/shift/view",[StudentShiftController::class,"studentShiftView"])->name("api.studentShiftView");
        Route::get("/student/shift/add",[StudentShiftController::class,"studentShiftAdd"])->name("api.studentShiftAdd");
        Route::post("/store/studentShift",[StudentShiftController::class,"storeStudentShift"])->name("api.storeStudentShift");
        Route::get("/edit/studentShift/{id}",[StudentShiftController::class,"studentShiftEdit"])->name("api.studentShiftEdit");
        Route::post("/update/studentShift/{id}",[StudentShiftController::class,"updateStudentShift"])->name("api.updateStudentShift");
        Route::get("/delete/studentShift/{id}",[StudentShiftController::class,"deleteStudentShift"])->name("api.deleteStudentShift");

                                                    // Fee Category
        Route::get("/fee/category/view",[FeeCategoryController::class,"feeCategoryView"])->name("api.feeCategoryView");
        Route::get("/student/fee/category/add",[FeeCategoryController::class,"feeCategoryAdd"])->name("api.feeCategoryAdd");
        Route::post("/store/fee/category",[FeeCategoryController::class,"storeFeeCategory"])->name("api.storeFeeCategory");
        Route::get("/edit/feeCategory/{id}",[FeeCategoryController::class,"feeCategoryEdit"])->name("api.feeCategoryEdit");
        Route::post("/update/feeCategory/{id}",[FeeCategoryController::class,"updateFeeCategory"])->name("api.updateFeeCategory");
        Route::get("/delete/feeCategory/{id}",[FeeCategoryController::class,"deleteFeeCategory"])->name("api.deleteFeeCategory");

                                                    // Fee Category Amount
        Route::get("/fee/amount/view",[FeeAmountController::class,"feeAmountView"])->name("api.feeAmountView");
        Route::get("/fee/amount/add",[FeeAmountController::class,"feeAmountAdd"])->name("api.feeAmountAdd");
        Route::post("/store/fee/amount",[FeeAmountController::class,"storeFeeAmount"])->name("api.storeFeeAmount");
        Route::get("/edit/feeAmount/{id}",[FeeAmountController::class,"feeAmountEdit"])->name("api.feeAmountEdit");
        Route::post("/update/feeAmount/{id}",[FeeAmountController::class,"updateFeeAmount"])->name("api.updateFeeAmount");
        Route::get("/details/feeCategory/{id}",[FeeAmountController::class,"detailsFeeCategory"])->name("api.detailsFeeCategory");

                                                    // Exam Type
        Route::get("/exam/type/view",[ExamTypeController::class,"ExamTypeView"])->name("api.ExamTypeView");
        Route::get("/exam/type/add",[ExamTypeController::class,"examTypeAdd"])->name("api.examTypeAdd");
        Route::post("/store/exam/type",[ExamTypeController::class,"storeExamType"])->name("api.storeExamType");
        Route::get("/edit/examType/{id}",[ExamTypeController::class,"examTypeEdit"])->name("api.examTypeEdit");
        Route::post("/update/examType/{id}",[ExamTypeController::class,"updateExamType"])->name("api.updateExamType");
        Route::get("/delete/examType/{id}",[ExamTypeController::class,"deleteExamType"])->name("api.deleteExamType");

                                                    // School Subject
        Route::get("/school/subject/view",[SchoolSubjectController::class,"schoolSubjectView"])->name("api.schoolSubjectView");
        Route::get("/school/subject/add",[SchoolSubjectController::class,"schoolSubjectAdd"])->name("api.schoolSubjectAdd");
        Route::post("/store/school/subject",[SchoolSubjectController::class,"storeSchoolSubject"])->name("api.storeSchoolSubject");
        Route::get("/edit/schoolSubject/{id}",[SchoolSubjectController::class,"schoolSubjectEdit"])->name("api.schoolSubjectEdit");
        Route::post("/update/schoolSubject/{id}",[SchoolSubjectController::class,"updateSchoolSubject"])->name("api.updateSchoolSubject");
        Route::get("/delete/schoolSubject/{id}",[SchoolSubjectController::class,"deleteSchoolSubject"])->name("api.deleteSchoolSubject");

                                                    // Assign Subject
        Route::get("/assign/subject/view",[AssignSubjectController::class,"assignSubjectView"])->name("api.assignSubjectView");
        Route::get("/assign/subject/add",[AssignSubjectController::class,"assignSubjectAdd"])->name("api.assignSubjectAdd");
        Route::post("/store/assign/subject",[AssignSubjectController::class,"storeAssignSubject"])->name("api.storeAssignSubject");
        Route::get("/edit/assignSubject/{id}",[AssignSubjectController::class,"assignSubjectEdit"])->name("api.assignSubjectEdit");
        Route::post("/update/assignSubject/{id}",[AssignSubjectController::class,"updateAssignSubject"])->name("api.updateAssignSubject");
        Route::get("/details/assignSubject/{id}",[AssignSubjectController::class,"detailsAssignSubject"])->name("api.detailsAssignSubject");

                                                    // Designation
        Route::get("/designation/view",[DesignationController::class,"designationView"])->name("api.designationView");
        Route::get("/designation/add",[DesignationController::class,"designationAdd"])->name("api.designationAdd");
        Route::post("/store/designation",[DesignationController::class,"storeDesignation"])->name("api.storeDesignation");
        Route::get("/edit/designation/{id}",[DesignationController::class,"designationEdit"])->name("api.designationEdit");
        Route::post("/update/designation/{id}",[DesignationController::class,"updateDesignation"])->name("api.updateDesignation");
        Route::get("/details/designation/{id}",[DesignationController::class,"deleteDesignation"])->name("api.deleteDesignation");
    });
    //E
    //-------------------------------------------------

                                                    //S Student Registration
    Route::prefix("students")->group(function (){
        Route::get("/registration/view",[StudentRegistrationController::class,"studentRegistrationView"])->name("api.studentRegistrationView");
        Route::get("/registration/add",[StudentRegistrationController::class,"studentRegAdd"])->name("api.studentRegAdd");
        Route::post("/registration/store",[StudentRegistrationController::class,"storeStudentRegistration"])->name("api.storeStudentRegistration");
        Route::post("/registration/search",[StudentRegistrationController::class,"searchData"])->name("api.searchData");
        Route::get("/registration/edit/{id}",[StudentRegistrationController::class,"studentRegEdit"])->name("api.studentRegEdit");
        Route::post("/registration/update/{studentId}/{id}",[StudentRegistrationController::class,"updateStudentRegistration"])->name("api.updateStudentRegistration");
        Route::get("/registration/Promotion/{id}",[StudentRegistrationController::class,"studentRegPromotion"])->name("api.studentRegPromotion");
        Route::post("/registration/update/promotion/{studentId}/{id}",[StudentRegistrationController::class,"promotionStudentRegistration"])->name("api.promotionStudentRegistration");

                                                    // Registration Fee
        Route::get("/registration/fee/view",[RegistrationFeeController::class,"registrationFeeView"])->name("api.registrationFeeView");
        Route::get("/registration/getStudent",[RegistrationFeeController::class,"getStudent"])->name("api.studentRegistrationGetStudents");

//        Route::get("/registration/fee/class",[RegistrationFeeController::class,"regFeeClassData"])->name("api.regFeeClassData");


                                                    // Monthly Fee
        Route::get("/monthly/fee/view",[MonthlyFeeController::class,"monthlyFeeView"])->name("api.monthlyFeeView");
        Route::get("/monthly/fee/getStudent",[MonthlyFeeController::class,"getStudentMonthly"])->name("api.studentMonthlyGetStudents");

                                                    // Exam Fee
        Route::get("/exam/fee/view",[ExamFeeController::class,"examFeeView"])->name("api.examFeeView");
        Route::get("/exam/fee/getStudent",[ExamFeeController::class,"ExamFeeClassData"])->name("api.studentExamFeeGetStudents");
    });
    //E
    //-------------------------------------------------

                                                    //S Employee Management
    Route::prefix("employees")->group(function (){
                                                    // Employee Registration
        Route::get("/reg/employee/view",[EmployeeRegController::class,"employeeView"])->name("api.employeeRegistrationView");
        Route::get("/reg/employee/Add",[EmployeeRegController::class,"employeeAdd"])->name("api.employeeAdd");
        Route::post("/reg/employee/store",[EmployeeRegController::class,"storeEmployeeRegistration"])->name("api.storeEmployeeRegistration");
        Route::get("/reg/employee/edit/{id}",[EmployeeRegController::class,"employeeRegEdit"])->name("api.employeeRegEdit");
        Route::post("/reg/employee/update/{id}",[EmployeeRegController::class,"updateEmployeeRegistration"])->name("api.updateEmployeeRegistration");

                                                    // Employee Salary
        Route::get("/salary/view",[EmployeeSalaryController::class,"employeeSalaryView"])->name("api.employeeSalaryView");
        Route::get("/salary/increment/{id}",[EmployeeSalaryController::class,"employeeSalaryIncrement"])->name("api.employeeSalaryIncrement");
        Route::post("/salary/update/{id}",[EmployeeSalaryController::class,"updateIncrementSalary"])->name("api.updateIncrementSalary");

                                                    // Employee Leaves
        Route::get("/leave/view",[EmployeeLeaveController::class,"employeeLeaveView"])->name("api.employeeLeaveView");
        Route::get("/leave/add",[EmployeeLeaveController::class,"employeeLeaveAdd"])->name("api.employeeLeaveAdd");
        Route::post("/leave/store",[EmployeeLeaveController::class,"storeEmployeeLeave"])->name("api.storeEmployeeLeave");
        Route::get("/leave/edit/{id}",[EmployeeLeaveController::class,"EmployeeLeaveEdit"])->name("api.EmployeeLeaveEdit");
        Route::post("/leave/update/{id}",[EmployeeLeaveController::class,"updateEmployeeLeave"])->name("api.updateEmployeeLeave");
        Route::get("/leave/delete/{id}",[EmployeeLeaveController::class,"deleteEmployeeLeave"])->name("api.deleteEmployeeLeave");

                                                    // Employee Attendance
        Route::get("/attendance/view",[EmployeeAttendanceController::class,"employeeAttendanceView"])->name("api.employeeAttendanceView");
        Route::get("/attendance/add",[EmployeeAttendanceController::class,"employeeAttendanceAdd"])->name("api.employeeAttendanceAdd");
        Route::post("/attendance/store",[EmployeeAttendanceController::class,"storeEmployeeAttendance"])->name("api.storeEmployeeAttendance");
        Route::get("/attendance/edit/{date}",[EmployeeAttendanceController::class,"employeeAttendanceEdit"])->name("api.employeeAttendanceEdit");
        Route::get("/attendance/details/{date}",[EmployeeAttendanceController::class,"employeeAttendanceDetails"])->name("api.employeeAttendanceDetails");

                                                    // Employee Monthly Salary
        Route::get("/monthly/salary/view",[MonthlySalaryController::class,"employeeMonthlySalaryView"])->name("api.employeeMonthlySalaryView");
        Route::get("/monthly/salary/get",[MonthlySalaryController::class,"employeeMonthlySalaryGet"])->name("api.employeeMonthlySalaryGet");


                                                    // Employee Attendance Report
        Route::get("/attendance/report/view",[AttenReportController::class,"AttendanceReportView"])->name("api.employeeAttendanceReportView");
        Route::get("/attendance/report/get",[AttenReportController::class,"attendanceReportGet"])->name("api.attendanceReportGet");


    });
    //E
    //-------------------------------------------------


                                                    //S Marks
    Route::prefix("Marks")->group(function (){
        Route::get("/entry/add",[MarksController::class,"marksAdd"])->name("api.marksEntryAdd");
        Route::post("/entry/store",[MarksController::class,"marksStore"])->name("api.marksEntryStore");
        Route::get("/entry/edit",[MarksController::class,"marksEdit"])->name("api.marksEntryEdit");
        Route::get("/entry/edit/store",[MarksController::class,"marksEditStore"])->name("api.studentMarksGetEdit");
        Route::post("/entry/edit/update",[MarksController::class,"marksEntryUpdate"])->name("api.marksEntryUpdate");

                                            // Mark Grade
        Route::get("/grade/view",[GradeController::class,"marksGradeView"])->name("api.marksEntryGrade");
        Route::get("/grade/add",[GradeController::class,"markGradeAdd"])->name("api.markGradeAdd");
        Route::post("/grade/store",[GradeController::class,"markGradeStore"])->name("api.storeMarksGrade");
        Route::get("/grade/edit/{id}",[GradeController::class,"markGradeEdit"])->name("api.marksGradeEdit");
        Route::post("/grade/update/{id}",[GradeController::class,"markGradeUpdate"])->name("api.UpdateMarksGrade");

                                            // Student Marks
        Route::get("/student/view",[StudentMarksController::class,"studentMarksView"])->name("api.studentMarksView");
        Route::get("/view/student",[StudentMarksController::class,"MarksView"])->name("api.MarksView");
    });
    Route::get("marks/subject/get",[DefaultController::class,"getSubject"])->name("api.marksGetSubject");
    Route::get("student/marks/get",[DefaultController::class,"getStudents"])->name("api.studentMarksGetStudent");
    Route::get("student/marks/name/get",[DefaultController::class,"getStudentName"])->name("api.marksGetStudent");
    Route::get("student/marks/view",[DefaultController::class,"DisplayStudentMark"])->name("api.DisplayStudentMark");
    Route::get("view/marks/student",[DefaultController::class,"DisplayMarkForStudent"])->name("api.DisplayMarkForStudent");
    //E
    //-------------------------------------------------



});

Route::middleware('auth:api')->get('/dashboard', function (Request $request) {
    return view("admin.index");
})->name('dashboard');
