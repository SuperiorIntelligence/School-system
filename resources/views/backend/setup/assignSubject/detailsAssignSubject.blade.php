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
                <h3 class="m-subheader__title ">

                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile  m-portlet--unair" style="background-color: #ffffff8f">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text" style="color: black">
                                    Details Assign Subject
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.assignSubjectAdd')}}','GET','Changing',1,0);">
                                        Add Assign Subject
                                    </button>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body" style="color: #262626;" >
                        <!--begin: Datatable -->
                        <h4><strong>Assign Subject : </strong>{{$detailsData[0]["studentClass"]["name"]}}</h4>
                        <div  id="m_datatable_latest_orders">

                            <table class="table table-hover" >
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Full Mark
                                    </th>
                                    <th>
                                        Pass Mark
                                    </th>
                                    <th>
                                        subjective Mark
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($detailsData->isEmpty())
                                    <tr>
                                        <th></th>
                                        <td><span class="text-danger">No data available in table</span></td>
                                        <td></td>
                                    </tr>
                                @else
                                    @foreach($detailsData as $key => $detail)
                                        <tr>
                                            <th>
                                                <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>
                                                {{$detail["schoolSubject"]["name"]}}
                                            </td>
                                            <td>
                                                {{$detail->fullMark}}
                                            </td>
                                            <td>
                                                {{$detail->passMark}}
                                            </td>
                                            <td>
                                                {{$detail->subjectiveMark}}
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



