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
                <h3 class="m-subheader__title " style="color:white ">
                    Search
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
                                    <strong>Employee Monthly Salary</strong>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__head-tools">

                        <div class="row m-form m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 0px" >
                            @csrf
                            <input type="hidden" name="url" id="url" value='{{route("api.employeeMonthlySalaryGet")}}'>
                            <div class="col-md-5">
                                <div class="form-group m-form__group " >
                                    <label for="exampleInputEmail1"style="color: #262626;">
                                        <strong>Attendance Date<span class="text-danger"> *</span></strong>
                                    </label>
                                    <input type="date" name="AttendDate" id="AttendDate" class="form-control m-input m-input--solid"  placeholder="Enter End Date">
                                </div>
                            </div>{{-- End col md 5 --}}

{{--                            <div class="col-md-5">--}}
{{--                                <div class="form-group m-form__group " >--}}
{{--                                    <label for="exampleInputEmail1">--}}
{{--                                        Class--}}
{{--                                    </label>--}}
{{--                                    <select class="form-control m-input m-input--solid" name="class_id" id="class_id" required="">--}}
{{--                                        <option value="" selected="" disabled="">Select Class</option>--}}

{{--                                        @foreach($classes as $class)--}}
{{--                                            <option value={{$class->id}} >{{$class->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}{{-- End col md 4 --}}

                            <div class="col-md-2" style="padding-top: 25px">
                                <a id="searchSalary" name="searchSalary" class="btn m-btn--pill  text-dark  btn-metal" >
                                    Search
                                </a>
                                {{--                                <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.searchData')}}','POST','Changing',1,16);">--}}
                                {{--                                    Search--}}
                                {{--                                </button>--}}

                            </div>
                            <div class="col-12" style="height: 24px;">

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row d-none" id="monthlySalary">
            <div class="col-md-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">

                    <div class="m-portlet__body" >
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders" >
                            <table class="table table-hover"  style="width: 100%;color: #262626;" >
                                <thead class="bg-secondary">
                                <tr>
                                    <td>#</td>
                                    <td>Employee Name</td>
                                    <td>Basic Salary</td>
                                    <td>Salary This Month</td>
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

{{--<script type="text/javascript">--}}
{{--    $(document).on('click','#search',function(){--}}
{{--        var year_id = $('#year_id').val();--}}
{{--        var class_id = $('#class_id').val();--}}
{{--        var url = $('#old').val();--}}
{{--        var cookievalue = getCookie("Authorization");--}}
{{--        $.ajax({--}}
{{--            url: url,--}}
{{--            type: "GET",--}}
{{--            data: {'year_id':year_id,'class_id':class_id},--}}
{{--            headers: {--}}
{{--                'Authorization': cookievalue--}}
{{--            },--}}
{{--            success: function (data) {--}}
{{--                $('#registrationFee').removeClass('d-none');--}}
{{--                // var html = '';--}}
{{--                // $.each( data, function(key, v){--}}
{{--                //     html +=--}}
{{--                //         '<tr>'+--}}
{{--                //         '<td>'+(key+1)+'</td>'+--}}
{{--                //         '<td>'+v.student.idNO+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"></td>'+--}}
{{--                //         '<td>'+v.student.name+'</td>'+--}}
{{--                //         '<td>'+v.student.fname+'</td>'+--}}
{{--                //         '<td>'+v.student.gender+'</td>'+--}}
{{--                //         '<td><input type="text" class="form-control form-control-sm" name="roll[]" value="'+v.roll+'"></td>'+--}}
{{--                //         '</tr>';--}}
{{--                // });--}}
{{--                // html = $('#loadData').html(html);--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}




