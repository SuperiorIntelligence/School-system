<style>
    .m-form , .m-form label
    {
        font-size: 1.5rem;
        font-family: Roboto
    }
    .btn{
        font-family: Roboto
    }
    td{
        font-size: 1.24rem;
    }
    th{
        font-size: 1.3rem;
    }

</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title " style="color: white">
                    Edit Attendance
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" style="background-color: #ffffff8f">
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >


                                    <div class="row" style="color: #262626;">
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    <strong>Attendance Date<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="date" name="AttendDate" id="AttendDate" value="{{$editData[0]["date"]}}" class="form-control m-input m-input--solid" >
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group m-form__group ">
                                                <table class="table table-hover" style="">
                                                    <thead class="bg-secondary">
                                                    <tr>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle">#</th>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle">Employee List</th>
                                                        <th colspan="3" class="text-center" style="vertical-align: middle;width: 30%">Attendance Status</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-white text-center btn presentAll" style="display: table-cell;background-color: #3c763d">Present</th>
                                                        <th class="text-white text-center btn AbsentAll" style="display: table-cell;background-color: #a92222">Absent</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach($editData as $key => $date)
                                                        <input type="hidden" class="number" name="employeeId[]" id="employeeId{{$key}}" value="{{$date->employeeId}}">
                                                        <tr id="div{{$date->employeeId}}" class="text-center">
                                                            <td><strong>{{$key+1}}</strong></td>
                                                            <td>{{$date["user"]["name"]}}</td>
                                                            <td style="text-align: center">
                                                                <input type="radio" name="attendStatus{{$key+1}}" value="Present" id="present{{$key}}"
                                                                          {{ ($date->attendStatus == "Present" ? 'checked':'') }}  >
                                                                <label for="present{{$key}}"  style="margin-left: 1%;font-size: 1rem;">
                                                                </label>
                                                            </td>
                                                            <td style="text-align: center">
                                                                <input type="radio" name="attendStatus{{$key+1}}" value="Absent" id="Absent{{$key}}"
                                                                    {{ ($date->attendStatus == "Absent" ? 'checked':'') }}>
                                                                <label for="Absent{{$key}}"  style="margin-left: 1%;font-size: 1rem;">
                                                                </label>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>


                                            </div>
                                        </div>{{--End col 12--}}
                                    </div>{{--End row--}}

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.storeEmployeeAttendance')}}','post','Changing',1,20);">
                                            Update
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.employeeAttendanceView')}}','GET','Changing',1,0)">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        {{$allData->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





