<style>
    .m-form , .m-form label
    {
        font-size: 1.5rem;
        font-family: Roboto
    }
    .btn{
        font-family: Roboto
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title " style="color: white">
                    Employee Leave
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >


                                    <div class="row" style="color: #262626;">

                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="exampleSelect1">
                                                    <strong>Employee Name</strong>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="employeeName"  id="employeeName" >
                                                    <option value="" selected="" disabled="">Select Employee Namee</option>
                                                    @foreach($employees as $employee)
                                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="exampleSelect1">
                                                    <strong>Leave Purpose</strong>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="purpose"  id="purpose" >
                                                    <option value="" selected="" disabled="">Select Leave Purpose</option>
                                                    @foreach($leavePurpose as $purpose)
                                                        <option value="{{$purpose->id}}">{{$purpose->name}}</option>
                                                    @endforeach
                                                    <option value="0">New Purpose</option>
                                                </select>
                                                <input type="text" name="addAnother" id="addAnother" class="form-control" placeholder="Write Purpose" style="display: none">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="height: 10px">

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    <strong>End Date<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="date" name="endDate" id="endDate" class="form-control m-input m-input--solid"  placeholder="Enter End Date">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.storeEmployeeLeave')}}','post','Changing',1,19);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.employeeLeaveView')}}','GET','Changing',1,0)">
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





