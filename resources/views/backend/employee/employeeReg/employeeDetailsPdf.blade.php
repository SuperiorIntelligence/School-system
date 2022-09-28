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
{{--@php--}}
{{--    $monthlyfee = \App\Models\FeeCategoryAmount::where('feeCategoryId','2')->where('classId',$details->classId)->first();--}}
{{--    $originalfee = $monthlyfee->amount;--}}
{{--    $discount = $details['discount']['discount'];--}}
{{--    $discounttablefee = $discount / 100 * $originalfee;--}}
{{--    $finalfee = (float)$originalfee - (float)$discounttablefee;--}}

{{--@endphp--}}


<table id="customers">
    <tr>
        <td ><h2 >
                School management system
            </h2></td>
        <td><h2>School ERP </h2>
            <p>School Address</p>
            <p>Phone : 99999999999</p>
            <p>Email : aliniaa1234@gmail.com</p>
            <p><b>Employee Registration Page</b></p>
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
        <td><img style="width: 100px;height: 100px" src="{{$details["profile_photo"]}}"></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Employee Id Number</td>
        <td>{{$details["idNO"]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Employee Name</td>
        <td>{{$details["name"]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Father's Name</td>
        <td>{{$details["fatherName"]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mother's Name</td>
        <td>{{$details["motherName"]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Mobile Number</td>
        <td>{{$details["mobile"]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Address</td>
        <td>{{$details["address"]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Gender</td>
        <td>{{$details["gender"]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>religion</td>
        <td>{{$details["religion"]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Date Of Birth</td>
        <td>{{ date("d-m-Y",strtotime($details["dateOfBirth"]))}} </td>
    </tr>
    <tr>
        <td>11</td>
        <td>Employee Designation</td>
        <td>{{$details["designation"]["name"]}} </td>
    </tr>
    <tr>
        <td>12</td>
        <td>Join Date</td>
        <td>{{date("d-m-Y",strtotime($details["joinDate"]))}} </td>
    </tr>
    <tr>
        <td>13</td>
        <td>Employee Salary</td>
        <td>{{$details["salary"]}} $ </td>
    </tr>

</table>
<br>
<i style="font-size: 10px;float: left">Print Data : {{date("d M Y")}}</i>

<br>

<hr style="border: dashed 0.5px ; width: 95%;color: #0f0f11;margin-bottom: 50px">



</body>
</html>




