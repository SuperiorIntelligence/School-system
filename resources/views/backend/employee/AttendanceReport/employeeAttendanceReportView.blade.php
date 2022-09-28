<style>
    .table td,
    .table th
    {
        font-size: 1.2rem;
        text-align: center;
        vertical-align: middle;
        font-family: Roboto
    }

</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">

                </h3>
            </div>

        </div>
    </div>



    <div class="m-content">


        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                    <div class="m-portlet__head ">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: black">
                                    <strong> Employee Attendance Report</strong>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__head-tools">

                        <div class="row m-form  m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 11px" >
                            @csrf
                            <input type="hidden" name="url" id="url" value='{{route("api.attendanceReportGet")}}'>
                            <div class="col-md-4">
                                <div class="form-group m-form__group" >
                                    <label for="exampleInputEmail1">
                                        Employee Name<span class="text-danger"> *</span>
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="employeeId" id="employeeId" required="">
                                        <option value="" selected="" disabled="">Select Employee</option>
                                        @foreach($Employees as $employee)
                                            <option value={{$employee->id}} >{{$employee->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 3 --}}

                            <div class="col-md-4">
                                <div class="form-group m-form__group " >
                                    <label for="exampleInputEmail1">
                                        Date<span class="text-danger"> *</span>
                                    </label>
                                    <input type="date" name="date" id="date" class="form-control m-input m-input--solid"
                                           placeholder="Enter End Mark"  required="" >
                                </div>
                            </div>{{-- End col md 3 --}}


                            <div class="col-md-2" style="padding-top: 25px">

{{--                                    <a id="searchAttendanceReport" onclick="loadPage('{{route('api.attendanceReportGet')}}','GET','Changing',1,0);" name="searchAttendanceReport" class="btn m-btn--pill  text-dark  btn-metal" >--}}
                                <a id="searchAttendanceReport"  name="searchAttendanceReport" class="btn m-btn--pill  text-dark  btn-metal" >
                                    Search
                                </a>

                            </div>
                            <div class="col-12" style="height: 24px;">

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row d-none" id="attendanceReport">
            <div class="col-md-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair">

                    <div class="m-portlet__body" >
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders" >
                            <table class="table table-hover"  style="width: 100%" >
                                <thead class="bg-secondary">
                                <tr>
                                    <td>#</td>
                                    <td>Id Number</td>
                                    <td>Employee Name</td>
                                    <td>Start Date</td>
                                    <td>End Date</td>
                                    <td>Chart</td>
                                    <td width="16%">Action</td>
                                </tr>
                                </thead>
                                <tbody id="loadData">
                                </tbody>
                            </table>

                            <div id="noData" class="d-none">

                            </div>

                        </div>

                    </div>

                    <div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>






