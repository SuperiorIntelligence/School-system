<?php


use App\Http\Controllers\api\Employee\EmployeeRegController;

use App\Http\Controllers\api\Employee\MonthlySalaryController;
use App\Http\Controllers\api\Report\AttenReportController;
use App\Http\Controllers\api\Student\MonthlyFeeController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\Setup\StudentClassController;
use App\Http\Controllers\api\Student\StudentRegistrationController;
use App\Http\Controllers\api\Student\RegistrationFeeController;
use App\Http\Controllers\api\Student\ExamFeeController;
use App\Http\Controllers\api\Employee\EmployeeSalaryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * https://localhost/
 * https://localhost/api/
 * */

Route::get("login",function (){
    return view("RegLog.login");
})->name("login");

Route::get("register",function (){
    return view("RegLog.register");
});

Route::get("main",function (){
    return view("admin.index",["url"=>"","method"=>"","location"=>""]);
//        return view("pageLoad.main",['url'=>route('mainPage'),'method'=>'GET','location'=>'end','kind'=>1]);
})->name("main");


Route::get('/', function () {
    return view('welcome');
});

Route::get('students/registration/update/promotion/{id}', [StudentRegistrationController::class, 'studentRegDetails'])->name("web.studentRegDetails");

                                        //S Registration Fee
Route::get("/registration/fee/payslip/{class_id}/{student_id}",[RegistrationFeeController::class,"registrationFeePayslip"])->name("web.registrationFeePayslip");
                                        //E Registration Fee

                                        //S Monthly Fee
Route::get("/monthly/fee/payslip/{class_id}/{student_id}/{month}",[MonthlyFeeController::class,"monthlyFeePayslip"])->name("web.monthlyFeePayslip");
                                        //E Monthly Fee

                                        //S Exam Fee
Route::get("/exam/fee/payslip/{class_id}/{student_id}/{examType}",[ExamFeeController::class,"ExamFeePayslip"])->name("web.ExamFeePayslip");
                                        //E Exam Fee

                                        //S Employee Details
Route::get("/reg/employee/details/{id}",[EmployeeRegController::class,"employeeRegDetails"])->name("web.employeeRegDetails");
                                        //E Employee Details

                                        //S Employee Salary
Route::get("/employee/salary/details/{id}",[EmployeeSalaryController::class,"employeeSalaryDetails"])->name("web.employeeSalaryDetails");
                                        //E Employee Salary
                                        //S Employee Monthly Salary
Route::get("/employee/monthly/salary/details/{employeeId}/{date}",[MonthlySalaryController::class,"employeeMonthlySalaryPayslip"])->name("web.employeeMonthlySalaryPayslip");
                                        //E Employee Salary
                                        //S Employee Attendance Report
Route::get("/employee/attendance/report/details/{employeeId}/{date}",[AttenReportController::class,"employeeAttendanceReportPayslip"])->name("web.employeeAttendanceReportPayslip");
                                        //E Employee Attendance Report

//Route::get("test",function (){
//    $author  = Author::where("remember_token",$_COOKIE['Authorization'])->first();
//    $author->remember_token = "";
//    return $author;
//});
