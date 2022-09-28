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

<table id="customers">
    <tr>
        <td ><h2 >
                School management system
            </h2></td>
        <td><h2>School ERP </h2>
            <p>School Address</p>
            <p>Phone : 99999999999</p>
            <p>Email : aliniaa1234@gmail.com</p>
            <p><b>Employee Salary</b></p>
        </td>

    </tr>



</table>

<h5><strong> Employee Name : </strong> {{$details->name}}</h5>
<h5><strong> Employee Id Number : </strong> {{$details->idNO}}</h5>

<table id="customers">
    <thead class="bg-secondary">--}}

    <tr>
        <th width="10%">#</th>
        <th>Previous Salary</th>
        <th>Increment Salary</th>
        <th>Present Salary</th>
        <th>effected Date</th>
    </tr>
    </thead>
    <tbody>
    @if(!($salaryLog->isEmpty()))--}}
        @foreach($salaryLog as $key => $value)
            <tr>
                <td>
                    <strong>{{$key+1}}</strong>
                </td>
                <td>
                    {{$value->previousSalary}}
                </td>
                <td>
                    {{$value->incrementSalary}}
                </td>
                <td>
                    {{$value->presentSalary}}
                </td>
                <td>
                    {{date("d-m-Y",strtotime($value->effectedSalary)) }}
                </td>

            </tr>
        @endforeach
    @endif
    </tbody>




</table>
<br>
<i style="font-size: 10px;float: left">Print Data : {{date("d M Y")}}</i>


<br>

<hr style="border: dashed 0.5px ; width: 95%;color: #0f0f11;margin-bottom: 50px">



</body>
</html>






