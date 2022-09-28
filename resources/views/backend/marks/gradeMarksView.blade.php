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
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title "style="color: white">
                    List Grade Marks
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair"style="background-color: #ffffff8f">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: black">
                                    <strong>Grade Marks</strong>
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.markGradeAdd')}}','GET','Changing',1,0);">
                                        Add Grade Marks
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <table class="table table-hover" style="color: #262626;">
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>Grade Name</th>
                                    <th>Grade Point</th>
                                    <th>Start Mark</th>
                                    <th>End Mark</th>
                                    <th>Point Range</th>
                                    <th>Remark</th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!($allData->isEmpty()))
                                    @foreach($allData as $key => $grade)
                                        <tr>
                                            <th>
                                                <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>
                                                {{$grade["gName"]["name"]}}</td>
                                            <td>
                                                {{$grade->gradePoint}}
                                            </td>
                                            <td>
                                                {{$grade->startMark}}
                                            </td>
                                            <td>
                                                {{$grade->endMark}}
                                            </td>
                                            <td>
                                                {{$grade->startPoint}} - {{$grade->endPoint}}
                                            </td>
                                            <td>
                                                {{$grade->remark}}
                                            </td>
                                            <td>
                                                <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.marksGradeEdit',$grade->id)}}','GET','Changing',1,0);">
                                                    Edit
                                                </button>

{{--                                                <button type="button" class="btn m-btn--pill    btn-info m-btn m-btn--custom"--}}
{{--                                                        onclick="window.open('{{route('web.employeeRegDetails',$grade->id)}}','_blank')">--}}
{{--                                                    Details--}}
{{--                                                </button>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            @if($allData->isEmpty())
                                <div class="col-md-12" style="text-align: center">
                                    <span class="text-danger">No data available in table</span>
                                </div>
                            @endif

                        </div>
                        {{--                        {{$allData->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





