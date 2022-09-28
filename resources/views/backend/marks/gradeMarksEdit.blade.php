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
                <h3 class="m-subheader__title "style="color: white">
                    Edit Grade Marks
                </h3>
            </div>
        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">
                    <div class="">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >



                                    <div class="col-12" style="height: 20px">

                                    </div>

                                    <div class="row" >{{-- Start row 1st--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1" style="color: #262626;">
                                                    <strong>Garde Name<span class="text-danger"> *</span></strong>
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="gradeName" id="gradeName" required="">
                                                    <option value="" selected="" disabled="">Select Garde</option>

                                                    @foreach($gradeName as $gName)
                                                        <option value={{$gName->id}} {{($editData->gradeName == $gName->id ? "selected":"")}}>{{$gName->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1"style="color: #262626;">
                                                    <strong>Grade Point<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="gradePoint" id="gradePoint" class="form-control m-input m-input--solid"
                                                       placeholder="Enter Garde Point" required="" value="{{$editData->gradePoint}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1"style="color: #262626;">
                                                    <strong>Start Mark<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="startMark" id="startMark" class="form-control m-input m-input--solid"
                                                       placeholder="Enter Start Mark"  required="" value="{{$editData->startMark}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                    </div>{{-- End row 1st--}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 2nd--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1" style="color: #262626;">
                                                    <strong>End Mark<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="endMark" id="endMark" class="form-control m-input m-input--solid"
                                                       placeholder="Enter End Mark"  required="" value="{{$editData->endMark}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1"style="color: #262626;">
                                                    <strong>Start Point<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="startPoint" id="startPoint" class="form-control m-input m-input--solid"
                                                       placeholder="Enter Start Point" required="" value="{{$editData->startPoint}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1"style="color: #262626;">
                                                    <strong>End Point<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="endPoint" id="endPoint" class="form-control m-input m-input--solid"
                                                       placeholder="Enter End Point"  required="" value="{{$editData->endPoint}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                    </div>{{-- End row 2nd--}}

                                    <div class="col-12" style="height: 10px">

                                    </div>

                                    <div class="row" >{{-- Start row 3rd--}}

                                        <div class="col-md-4">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1"style="color: #262626;">
                                                    <strong>Remark<span class="text-danger"> *</span></strong>
                                                </label>
                                                <input type="text" name="remark" id="remark" class="form-control m-input m-input--solid"
                                                       placeholder="Enter Remark"  required="" value="{{$editData->remark}}">
                                            </div>
                                        </div>{{-- End col md 4 --}}

                                    </div>{{-- End row 3rd--}}


                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.UpdateMarksGrade',$editData->id)}}','post','Changing',1,22);">
                                            Update
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.marksEntryGrade')}}','GET','Changing',1,0)">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



