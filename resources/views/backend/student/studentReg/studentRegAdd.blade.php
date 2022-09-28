<style>
    .m-form , .m-form label
    {
        font-size: 1.5rem;
        font-family: Roboto
    }
    .btn{
        font-family: Roboto
    }
    #test {
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0px;
        left: 50%;
        border-radius: 50px;
        transform: translateX(-50%);
        clip-path: circle();
    }
    #file {
        /*display: none;*/
    }
    #avatar{
        /*border: 0.1px solid black;*/
        left: 10px;
        top: -48px;
        border-radius: 50px;
        width: 100px;
        height: 100px;


    }
    #file{
        font-size: 1.1rem;
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Add Student
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                    <div class="">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >

                                    <div class="row">{{-- Start Pic Profile--}}
                                        <div class="col-md-12" >
                                            <div class=" m-card-profile__pic" >
                                                <div class="m-card-profile__pic-wrapper " style="text-align: center;"  >

                                                    <label id="test" for="file">
                                                    </label>
                                                    <img id="avatar" src="{{url('image\studentPhotos\2819_R1NUIENBUiAyNDc4LTE5.jpg')}}"  alt=""/>
                                                    {{--                                    <button   style="border-radius: 50px; background-image: url('{{asset('assets/app/media/img/users/user4.jpg')}}');width: 84px;height: 83px;"  id="img-result" onclick="picProfile()" ></button>--}}

                                                </div>

                                            </div>
                                        </div>
                                    </div>{{--End Pic Profile--}}

                                    <div class="col-12" style="height: 20px">

                                    </div>

                                    <div class="row" >{{-- Start row 1st--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Student Name<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="sName" id="sName" class="form-control m-input m-input--solid"  placeholder="Enter Name"  required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Father's Name<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="fName" id="fName" class="form-control m-input m-input--solid"  placeholder="Enter Name" required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Mother's Name<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="mName" id="mName" class="form-control m-input m-input--solid"  placeholder="Enter Name"  required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                    </div>{{-- End row 1st--}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 2nd--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Mobile Number<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="mobile" id="mobile" class="form-control m-input m-input--solid"  placeholder="Enter Number"  required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Address<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="address" id="address" class="form-control m-input m-input--solid"  placeholder="Enter Address" required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Gender<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="gender"  id="gender" required="">
                                                    <option value="" selected="" disabled="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                    </div>{{-- End row 2nd--}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 3rd--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Religion<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="religion"  id="religion" required="">
                                                    <option value="" selected="" disabled="">Select Religion</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Christian">Christian</option>
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Date Of Birth<span class="text-danger"> *</span>
                                                </label>
                                                <input type="date" name="dob" id="dob" class="form-control m-input m-input--solid"    required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Discount<span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" name="discount" id="discount" class="form-control m-input m-input--solid" placeholder="Enter Discount"  required="">
                                            </div>
                                        </div>{{-- End col md 4 --}}
                                    </div>{{-- End row 3rd--}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 4th--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Year<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="year"  id="year" required="">
                                                    <option value="" selected="" disabled="">Select Year</option>
                                                    @foreach($years->sortBy('name') as $year)
                                                    <option value={{$year->id}}>{{$year->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Class<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="class"  id="class" required="">
                                                    <option value="" selected="" disabled="">Select Class</option>
                                                    @foreach($classes as $class)
                                                        <option value={{$class->id}}>{{$class->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Group<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="group"  id="group" required="">
                                                    <option value="" selected="" disabled="">Select Group</option>
                                                    @foreach($groups as $group)
                                                        <option value={{$group->id}}>{{$group->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}
                                    </div>{{-- End row 4th --}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 5th--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Shift<span class="text-danger"> *</span>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="shift"  id="shift" required="">
                                                    <option value="" selected="" disabled="">Select Shift</option>
                                                    @foreach($shifts as $shift)
                                                        <option value={{$shift->id}}>{{$shift->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Student Image<span class="text-danger"> *</span>
                                                </label>
                                                <input  type="file" name="file" id="file"  onchange="loadFile(event)" accept=".jpg, .jpeg, .png , .gif" multiple>
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">


                                        </div>

                                    </div>{{-- End row 5th --}}

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.storeStudentRegistration')}}','post','Changing',1,15);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.studentYearView')}}','GET','Changing',1,0)">
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



