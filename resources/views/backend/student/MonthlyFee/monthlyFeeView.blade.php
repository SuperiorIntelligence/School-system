<style>
    .table td,
    .table th
    {
        font-size: 1.2rem;
        text-align: center;
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
                                <h3 class="m-portlet__head-text" style="color:black;">
                                    Student <strong>Monthly Fee</strong>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__head-tools">

                        <div class="row m-form  m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 11px" >
                            @csrf
                            <input type="hidden" name="old" id="old" value='{{route("api.studentMonthlyGetStudents")}}'>
                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1"style="font-size: 1.3rem; color: #262626;">
                                        Year
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="year_id" id="year_id" required="">
                                        <option value="" selected="" disabled="">Select Year</option>
                                        <option value=""  >nothing</option>
                                        @foreach($years->sortBy('name') as $year)
                                            <option value={{$year->id}} >{{$year->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 5 --}}

                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1"style="font-size: 1.3rem; color: #262626;">
                                        Class
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="class_id" id="class_id" required="">
                                        <option value="" selected="" disabled="">Select Class</option>

                                        @foreach($classes as $class)
                                            <option value={{$class->id}} >{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 5 --}}

                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem; color: #262626; ">
                                        Month
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="month" id="month" required="">
                                        <option value="" selected="" disabled="">Select Class</option>

                                            <option value="January" >January</option>
                                            <option value="February" >February</option>
                                            <option value="March" >March</option>
                                            <option value="April" >April</option>
                                            <option value="May" >May</option>
                                            <option value="June" >June</option>
                                            <option value="July" >July</option>
                                            <option value="August" >August</option>
                                            <option value="September" >September</option>
                                            <option value="October" >October</option>
                                            <option value="November" >November</option>
                                            <option value="December" >December</option>

                                    </select>
                                </div>
                            </div>{{-- End col md 5 --}}

                            <div class="col-md-3" style="padding-top: 25px">

                                <a id="searchMonthlyFee" name="searchMonthlyFee111" class="btn m-btn--pill  text-dark  btn-metal" >
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



        <div class="row d-none" id="MonthlyFee">
            <div class="col-md-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">

                    <div class="m-portlet__body" >
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders" >
                            <table class="table table-hover"  style="width: 100%;color: #262626;" >
                                <thead class="bg-secondary">
                                <tr>
                                    <td>#</td>
                                    <td>Id Number</td>
                                    <td>Student Name</td>
                                    <td>Monthly Fee</td>
                                    <td>Discount</td>
                                    <td>Student Fee</td>
                                    <td>Action</td>

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





