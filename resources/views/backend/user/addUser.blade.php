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
                    <strong>Add User</strong>
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" style=" background-color: #ffffff8f" >
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                                <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                               @csrf
                                <div class="m-portlet__body" >

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="exampleSelect1" style="color: black;">
                                                    User Role
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="role"  id="role" >
                                                    <option value="" selected="" disabled=""><strong>Select Role</strong></option>
                                                    <option value="Admin" selected><strong>Admin</strong></option>
{{--                                                    <option value="Employee"><strong>Employee</strong></option>--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1" style="color: black;">
                                                    User Name <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" class="form-control m-input m-input--solid" name="name" id="name" placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><br></div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group ">
                                                <label for="exampleInputPassword1" style="color: black;">
                                                    User Email <span class="text-danger"> *</span>
                                                </label>
                                                <input type="email" class="form-control m-input m-input--solid" name="email" id="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
{{--                                            <div class="form-group m-form__group ">--}}
{{--                                                <label for="exampleInputPassword1">--}}
{{--                                                   User Password <span class="text-danger"> *</span>--}}
{{--                                                </label>--}}
{{--                                                <input type="password" class="form-control m-input m-input--solid" name="password" id="password" placeholder="Enter password">--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.userStore')}}','post','Changing',1,1);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.userview')}}','GET','Changing',1,0);">
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



