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
                    Employee Salary Increment
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


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1" style="color: #262626;">
                                                    <strong>Salary Amount<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="incrementSalary" id="incrementSalary" class="form-control m-input m-input--solid"  placeholder="Enter Salary Amount">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1" style="color: #262626;">
                                                    <strong>Effected Date<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="date" name="effectedSalary" id="effectedSalary" class="form-control m-input m-input--solid"  placeholder="Enter name">
                                            </div>
                                        </div>

                                    </div>







                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.updateIncrementSalary',$editData->id)}}','post','Changing',1,18);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.employeeSalaryView')}}','GET','Changing',1,0)">
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




