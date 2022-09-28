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
                                <h3 class="m-portlet__head-text" style="color: black">
                                    <strong>Student Marks Entry</strong>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__head-tools">

                        <div class="row m-form  m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 11px" >
                            @csrf
                            <input type="hidden" name="url" id="url" value='{{route("api.marksGetSubject")}}'>
                            <input type="hidden" name="urlGetData" id="urlGetData" value='{{route("api.studentMarksGetStudent")}}'>
                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem">
                                        Year<span class="text-danger"> *</span>
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="year_id" id="year_id" required="">
                                        <option value="" selected="" disabled="">Select Year</option>
                                        <option value=""  >nothing</option>
                                        @foreach($years->sortBy('name') as $year)
                                            <option value={{$year->id}} >{{$year->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 3 --}}

                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem">
                                        Class<span class="text-danger"> *</span>
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="class_id" id="class_id" required="">
                                        <option value="" selected="" disabled="">Select Class</option>

                                        @foreach($classes as $class)
                                            <option value={{$class->id}} >{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 3 --}}

                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem">
                                        Subject<span class="text-danger"> *</span>
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="subject" id="subject" required="">
                                        <option  selected="" >Select Subject</option>

                                    </select>
                                </div>
                            </div>{{-- End col md 3 --}}

                            <div class="col-md-3">
                                <div class="form-group  " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem">
                                        Exam Type<span class="text-danger"> *</span>
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="examType" id="examType" required="">
                                        <option value="" selected="" disabled="">Select Exam Type</option>

                                        @foreach($ExamType as $exam)
                                            <option value={{$exam->id}} >{{$exam->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 3 --}}

                            <div class="col-md-2" style="padding-top: 25px">

{{--                                <a id="searchStudentMarks" onclick="loadPage('{{route('api.studentMarksGetStudent')}}','GET','Changing',1,0);" name="searchStudentMarks" class="btn m-btn--pill  text-dark  btn-metal" >--}}
                                <a id="searchStudentMarks"  name="searchStudentMarks" class="btn m-btn--pill  text-dark  btn-metal" >
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



        <div class="row d-none" id="MarksEntry">
            <div class="col-md-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">

                    <div class="m-portlet__body" >
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders" >
                            <table class="table table-hover"  style="color: black;width: 100%"  >
                                <thead class="bg-secondary">
                                <tr>
                                    <td>#</td>
                                    <td>Id Number</td>
                                    <td>Student Name</td>
                                    <td>Father name</td>
                                    <td>Gender</td>
                                    <td width="16%">Marks</td>
                                </tr>
                                </thead>
                                <tbody id="loadData">
                                </tbody>
                            </table>

                            <input id="submit" type="submit" class="btn m-btn--pill  text-dark  btn-success d-none" value="Submit"
                                   onclick="loadPage('{{route('api.marksEntryStore')}}','POST','Changing',1,21);">

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





