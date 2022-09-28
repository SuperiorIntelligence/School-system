<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

@php

            $AttendDate = date("Y-m",strtotime($details['0']->date));

            if ($AttendDate !='') {
                $where[] = ['date','like',$AttendDate.'%'];
            }
            $total = App\Models\EmployeeAttendance::with(['user'])->where($where)->where("employeeId",$details['0']->employeeId)->get();
            $absent = count($total->where("attendStatus","Absent"));
            $salary = (float)$details[0]["user"]["salary"];
                $salaryperday = (float)$salary/30;
                $totalSalaryminus = (float)$absent*(float)$salaryperday;
                $totalSalary = (float)$salary - (float)$totalSalaryminus;

@endphp


<table id="customers">
    <tr>
        <td><h2>School Managemet System </h2></td>
        <td><h2>School ERP </h2>
            <p>School Address</p>
            <p>Phone : 99999999999</p>
            <p>Email : aliniaa1234@gmail.com</p>
            <p><b>Employee Monthly Salary</b></p>
        </td>

    </tr>


</table>



<table id="customers">
    <tr>
        <th width="10%">#</th>
        <th width="45%"><b>Employee Detail</b></th>
        <th width="45%">Employee Data</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Employee Photo</td>
        <td><img style="width: 100px;height: 100px" src="{{$details[0]["user"]["profile_photo"]}}"></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Employee Name</td>
        <td>{{$details[0]["user"]["name"]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Basic Salary</td>
        <td>{{$details[0]["user"]["salary"]}} $</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Total Absent for This Month</td>
        <td>{{$absent}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Month</td>
        <td>{{date("M Y",strtotime($details['0']->date))}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Salary This Month</td>
        <td>{{$totalSalary}} $</td>
    </tr>

</table>
<br>
<i style="font-size: 10px;float: left">Print Data : {{date("d M Y")}}</i>

<br>

<hr style="border: dashed 0.5px ; width: 95%;color: #0f0f11;margin-bottom: 50px">



</body>
</html>



