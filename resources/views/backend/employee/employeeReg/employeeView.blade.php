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
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" style="background-color: #ffffff8f">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: black;">
                                    List Employee
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.employeeAdd')}}','GET','Changing',1,0);">
                                        Add Employee
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
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Join Data</th>
                                    <th>Salary</th>
                                    <?php
                                    $userWorking = DB::table("authors")->where("remember_token",$_COOKIE['Authorization'])->first();
                                    ?>
                                    @if($userWorking->role == "Admin")
                                    <th>Code</th>
                                    @endif
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!($allData->isEmpty()))
                                    @foreach($allData as $key => $employee)
                                        <tr>
                                            <th>
                                                <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>
                                                {{$employee->name}}
                                            </td>
                                            <td>
                                                {{$employee->idNO}}
                                            </td>
                                            <td>
                                                {{$employee->mobile}}
                                            </td>
                                            <td>
                                                {{$employee->gender}}
                                            </td>
                                            <td>
                                                {{$employee->joinDate}}
                                            </td>
                                            <td>
                                                {{$employee->salary}}
                                            </td>
                                            @if($userWorking->role == "Admin")
                                            <td>
                                                {{$employee->code}}
                                            </td>
                                            @endif
                                            <td>
                                                <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.employeeRegEdit',$employee->id)}}','GET','Changing',1,0);">
                                                    Edit
                                                </button>

                                                <button type="button" class="btn m-btn--pill    btn-info m-btn m-btn--custom"
                                                        onclick="window.open('{{route('web.employeeRegDetails',$employee->id)}}','_blank')">
                                                    Details
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            @if($allData->isEmpty())
                            <div class="col-md-12" style="text-align: center">
                                <span class="text-danger"><strong>No data available in table</strong></span>
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




