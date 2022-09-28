<style>
    .table td,
    .table th
    {
        font-size: 1.2rem;
        text-align: center;
        font-family: Roboto
    }
    .btn.m-btn--custom{
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
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: black">
                                    Employee Leave
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.employeeLeaveAdd')}}','GET','Changing',1,0);">
                                        Add Employee Leave
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <table class="table table-hover" style="color: #262626;">
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>Name</th>
                                    <th>Id Number</th>
                                    <th>Purpose</th>
                                    <th>Start Date</th>
                                    <th>End Start</th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $leave)
                                        <tr>
                                            <th>
                                                <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>{{$leave["user"]["name"]}}</td>
                                            <td>{{$leave["user"]["idNO"]}}</td>
                                            <td>{{$leave["purpose"]["name"]}}</td>
                                            <td>{{$leave->startDate}}</td>
                                            <td>{{$leave->endDate}}</td>
                                            <td>
                                                <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.EmployeeLeaveEdit',$leave->id)}}','GET','Changing',1,0);">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn m-btn--pill    btn-danger m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.deleteEmployeeLeave',$leave->id)}}','GET','Changing',1,0);">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            @if($allData->isEmpty())
                                <div class="col-md-12" style="text-align: center">
                                    <span class="text-danger">No data available in table</span>
                                </div>
                            @endif

                        </div>
                        {{--                        {{$allData->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




