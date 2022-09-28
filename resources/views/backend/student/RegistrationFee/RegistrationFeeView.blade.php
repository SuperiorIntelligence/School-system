{{--<style>--}}
{{--    .table td,--}}
{{--    .table th--}}
{{--    {--}}
{{--        font-size: 1.2rem;--}}
{{--        text-align: center;--}}
{{--        font-family: Roboto--}}
{{--    }--}}
{{--    .btn.m-btn--custom{--}}
{{--        font-family: Roboto--}}
{{--    }--}}
{{--    #avatar{--}}
{{--        width: 70px;--}}
{{--        height: 70px;--}}

{{--    }--}}
{{--</style>--}}
{{--<div class="m-grid__item m-grid__item--fluid m-wrapper" >--}}
{{--    <!-- BEGIN: Subheader -->--}}
{{--    <div class="m-subheader ">--}}
{{--        <div class="d-flex align-items-center">--}}
{{--            <div class="mr-auto">--}}
{{--                <h3 class="m-subheader__title ">--}}
{{--                    List--}}
{{--                </h3>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}



{{--    <div class="m-content">--}}


{{--        <div class="row">--}}
{{--            <div class="col-xl-12">--}}
{{--                <div class="m-portlet m-portlet--mobile  m-portlet--unair">--}}
{{--                    <div class="m-portlet__head ">--}}
{{--                        <div class="m-portlet__head-caption">--}}
{{--                            <div class="m-portlet__head-title">--}}
{{--                                <h3 class="m-portlet__head-text">--}}
{{--                                    Student <strong>Registration Fee</strong>--}}
{{--                                </h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="m-portlet__head-tools">--}}

{{--                        <div class="row m-form m-form--fit m-form--label-align-right" onsubmit="submit()" style="margin: 14px 0px 0px 0px" >--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="old" id="old" value='{{route("api.regFeeClassData")}}'>--}}
{{--                            <div class="col-md-5">--}}
{{--                                <div class="form-group m-form__group " >--}}
{{--                                    <label for="exampleInputEmail1">--}}
{{--                                        Year--}}
{{--                                    </label>--}}
{{--                                    <select class="form-control m-input m-input--solid" name="year_id" id="year_id" required="">--}}
{{--                                        <option value="" selected="" disabled="">Select Year</option>--}}
{{--                                        <option value=""  >nothing</option>--}}
{{--                                        @foreach($years->sortBy('name') as $year)--}}
{{--                                            <option value={{$year->id}} >{{$year->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}{{-- End col md 4 --}}

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

{{--                            <div class="col-md-2" style="padding-top: 25px">--}}


{{--                                <a id="search" name="search" class="btn m-btn--pill  text-dark  btn-metal" >--}}
{{--                                    Search--}}
{{--                                </a>--}}
{{--                                <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.searchData')}}','POST','Changing',1,16);">--}}
{{--                                    Search--}}
{{--                                </button>--}}

{{--                            </div>--}}
{{--                            <div class="col-12" style="height: 24px;">--}}

{{--                            </div>--}}


{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



{{--        <div class="row" id="rollGenerate">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="m-portlet m-portlet--mobile  m-portlet--unair">--}}

{{--                    <div class="m-portlet__body" >--}}
{{--                        <!--begin: Datatable -->--}}
{{--                        <div  id="m_datatable_latest_orders">--}}

{{--                            <div id="DocumentResults">--}}


{{--                                <script id="document-template" type="text/x-handlebars-template">--}}
{{--                                    <table class="table table-hover" style="width: 100%" >--}}

{{--                                        <thead class="bg-secondary">--}}
{{--                                            <tr>--}}
{{--                                                @{{{thsource}}}--}}
{{--                                            </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                            @{{#each this}}--}}
{{--                                                <tr>--}}
{{--                                                    @{{{tdsource}}}--}}
{{--                                                </tr>--}}
{{--                                            @{{/each}}--}}
{{--                                        </tbody>--}}

{{--                                    </table>--}}
{{--                                </script>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                        --}}{{--                        {{$allData->links()}}--}}
{{--                    </div>--}}

{{--                    <div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<script>--}}
{{--    $(document).on('click','#search',function(){--}}
{{--        var year_id = $('#year_id').val();--}}
{{--        var class_id = $('#class_id').val();--}}
{{--        var cookievalue = getCookie("Authorization");--}}
{{--        // var mme = $('#old').val();--}}
{{--        // var me = '"'+{{route("api.regFeeClassData")}}+'"';--}}
{{--        alert(mme);--}}
{{--        $.ajax({--}}
{{--            url: '{{route("api.regFeeClassData")}}',--}}
{{--            // url: '{{route("api.regFeeClassData")}}',--}}
{{--            // url: "{{Route('api.regFeeClassData')}}",--}}
{{--            // url: "{{URL::to('students/registration/fee/class')}}",--}}
{{--            type: "Get",--}}
{{--            data: {'year_id':year_id,'class_id':class_id},--}}
{{--            headers: {--}}
{{--                'Authorization': cookievalue--}}
{{--            },--}}
{{--            beforeSend: function() {--}}
{{--            },--}}
{{--            success: function (data) {--}}
{{--                var source = $("#document-template").html();--}}
{{--                var template = Handlebars.compile(source);--}}
{{--                var html = template(data);--}}
{{--                $('#DocumentResults').html(html);--}}
{{--                $('[data-toggle="tooltip"]').tooltip();--}}
{{--            },--}}
{{--            // cache:--}}
{{--            //     alert("cache")--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}



