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
                <h3 class="m-subheader__title " style="color: white">
                    Details
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
                                    <strong>Employee Attendance</strong>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="m_datatable_latest_orders">

                            <table class="table table-hover"style="color: #262626;" >
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Date</th>
                                    <th>Attend Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $key => $attend)
                                    <tr>
                                        <th>
                                            <strong>{{$key+1}}</strong>
                                        </th>
                                        <td>{{$attend["user"]["name"]}}</td>
                                        <td>{{$attend["user"]["idNO"]}}</td>
                                        <td>{{date("d-m-Y",strtotime($attend->date)) }}</td>
                                        @if($attend->attendStatus == "Present")
                                            <td style="background-color:#04AA6D;color: white">{{$attend->attendStatus}}</td>
                                        @elseif($attend->attendStatus =="Absent")
                                            <td style="background-color: darkred;color: white">{{$attend->attendStatus}}</td>
                                        @endif
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{--                                                {{$allData->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






