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
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

@php



@endphp


<table id="customers">
    <tr>
        <td><h2>School Managemet System </h2></td>
        <td><h2>School ERP </h2>
            <p>School Address</p>
            <p>Phone : 99999999999</p>
            <p>Email : aliniaa1234@gmail.com</p>
            <p><b>Employee Attendance Report</b></p>
            <p>Date information : <b>{{date("m-Y",strtotime($allData[0]->date))}}</b></p>
        </td>

    </tr>


</table>
<br>
<table id="customers" style="text-align: center">
    <tr>
        <th>Employee Name</th>
        <th>Employee Mobile Number</th>
        <th>Employee Photo</th>
    </tr>
    <tr>
        <td>{{$allData[0]["user"]["name"]}}</td>
        <td>{{$allData[0]["user"]["mobile"]}}</td>
        <td><img style="width: 100px;height: 100px" src="{{$allData[0]["user"]["profile_photo"]}}"></td>
    </tr>
</table>
<br>
<table id="customers" style="text-align: center">
    <tr>
        <th width="10%">#</th>
        <th width="45%"><b>Date</b></th>
        <th width="45%">Attend Status</th>
    </tr>

    @foreach($allData as $key=>$value)
    <tr>
        <td>{{$key}}</td>
        <td>{{date("d-m-Y",strtotime($value->date))}}</td>
        <td>{{$value->attendStatus}}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="2" style="text-align:left">
            <strong>Total Absent : </strong> {{$absent}} <br> <strong>Total Present : </strong> {{$present}}


        </td>
    </tr>


</table>
<br>
<i style="font-size: 10px;float: left">Print Data : {{date("d M Y")}}</i>

<br>

<hr style="border: dashed 0.5px ; width: 95%;color: #0f0f11;margin-bottom: 50px">



</body>
</html>




