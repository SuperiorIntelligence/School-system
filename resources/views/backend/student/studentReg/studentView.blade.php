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
    #avatar{
        width: 70px;
        height: 70px;

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
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" >
                    <div class="m-portlet__head ">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: #262626">
                                    Student Search
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__head-tools">

                        <div class="row m-form m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 0px" >
                            @csrf
                            <div class="col-md-5">
                                <div class="form-group m-form__group " >
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem; color: #262626; " >
                                        Year
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="searchYear"  id="searchYear" required="">
                                        <option value="" selected="" disabled="">Select Year</option>
                                        <option value=""  >nothing</option>
                                        @foreach($years->sortBy('name') as $year)
                                            <option value={{$year->id}} {{(@$selectYear == $year->id) ? "selected":""}}>{{$year->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 4 --}}

                            <div class="col-md-5">
                                <div class="form-group m-form__group ">
                                    <label for="exampleInputEmail1" style="font-size: 1.3rem; color: #262626; ">
                                        Class
                                    </label>
                                    <select class="form-control m-input m-input--solid" name="searchClass"  id="searchClass" required="">
                                        <option value="" selected="" disabled="">Select Class</option>
                                        <option value=""  >nothing</option>
                                        @foreach($classes as $class)
                                            <option value={{$class->id}} {{(@$selectClass == $class->id) ? "selected":""}}>{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>{{-- End col md 4 --}}

                            <div class="col-md-2" style="padding-top: 25px">

                                <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.searchData')}}','POST','Changing',1,16);">
                                    Search Student
                                </button>

                            </div>
                            <div class="col-12" style="height: 24px;">

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" style="background-color: #ffffff8f">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title" >
                                <h3 class="m-portlet__head-text"style="color: black;">
                                    Student List
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.studentRegAdd')}}','GET','Changing',1,0);">
                                        Add Student
                                    </button>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <table class="table table-hover" style="width: 100%;color: #262626;" >
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Id Number
                                    </th>
                                    <th>
                                        Roll
                                    </th>
                                    <th>
                                        Year
                                    </th>
                                    <th>
                                        Class
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <?php
                                     $admin = DB::table("authors")->where("remember_token",$_COOKIE['Authorization'])->first();
                                    ?>
                                    @if($admin->role == "Admin")
                                    <th>
                                        Code
                                    </th>
                                    @endif
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($allData->isEmpty())
                                    <tr>
                                        <th></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong><span class="text-danger">No data available in table</span></strong></td>
                                        <td></td>
                                    </tr>
                                @else
                                    @foreach($allData as $key => $student)
                                        <tr>
                                            <th>
                                                <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>
                                                {{$student["student"]["name"]}}
                                            </td>
                                            <td>
                                                {{$student["student"]["idNO"]}}
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{$student["studentYear"]["name"]}}
                                            </td>
                                            <td>
                                                {{$student["studentClass"]["name"]}}
                                            </td>
                                            <td>
                                                <img id="avatar"  src="{{!empty($student["student"]["profile_photo"]) ? url($student["student"]["profile_photo"]) : url('image\studentPhotos\2819_R1NUIENBUiAyNDc4LTE5.jpg')}}" alt=""/>
                                            </td>
                                            @if($admin->role == "Admin")
                                            <td>
                                                {{$student["student"]["code"]}}
                                            </td>
                                            @endif
                                            <td>
                                                <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.studentRegEdit',$student->studentId)}}','GET','Changing',1,0);">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn m-btn--pill    btn-danger m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.studentRegPromotion',$student->studentId)}}','GET','Changing',1,0);">
                                                    Promotion
                                                </button>
                                                <button type="button" class="btn m-btn--pill    btn-info m-btn m-btn--custom" title="Details"
                                                        onclick="window.open('{{route('web.studentRegDetails',$student->studentId)}}','_blank')">
                                                    <li class="fa flaticon-list" ></li>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                        {{--                        {{$allData->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




