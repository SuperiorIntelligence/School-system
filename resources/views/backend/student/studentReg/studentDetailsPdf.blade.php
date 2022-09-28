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
        <td><h2>School Managemet System </h2></td>
        <td><h2>School ERP </h2>
        <p>School Address</p>
        <p>Phone : 99999999999</p>
        <p>Email : aliniaa1234@gmail.com</p>
        </td>

    </tr>


</table>



<table id="customers">
    <tr>
        <th width="10%">#</th>
        <th width="45%"><b>Student Detail</b></th>
        <th width="45%">Student Data</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Student Photo</td>
        <td><img style="width: 100px;height: 100px" src="{{$details["student"]["profile_photo"]}}"></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Student Name</td>
        <td>{{$details["student"]["name"]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Student Id Number</td>
        <td>{{$details["student"]["idNO"]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Student Role</td>
        <td>{{$details["student"]->role}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Father's Name</td>
        <td>{{$details["student"]["fatherName"]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mother's Name</td>
        <td>{{$details["student"]["motherName"]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Mobile Number</td>
        <td>{{$details["student"]["mobile"]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Address</td>
        <td>{{$details["student"]["address"]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Gender</td>
        <td>{{$details["student"]["gender"]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Religion</td>
        <td>{{$details["student"]["religion"]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Date Of Birth</td>
        <td>{{$details["student"]["dateOfBirth"]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Discount</td>
        <td>{{$details["discount"]["discount"]}} %</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Year</td>
        <td>{{$details["studentYear"]["name"]}}</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Class</td>
        <td>{{$details["studentClass"]["name"]}}</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Group</td>
        <td>{{$details["group"]["name"]}}</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Shift</td>
        <td>{{$details["shift"]["name"]}}</td>
    </tr>

</table>
<br>
<i style="font-size: 10px;float: left">Print Data : {{date("d M Y")}}</i>
</body>
</html>


