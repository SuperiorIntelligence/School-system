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
                    List Fee Amount
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
                                    <strong>Student Fee Amount</strong>
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.feeAmountAdd')}}','GET','Changing',1,0);">
                                        Add Fee Amount
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
                                    <th>
                                        Fee Category
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($allData->isEmpty())
                                    <tr>
                                        <th></th>
                                        <td><span class="text-danger">No data available in table</span></td>
                                        <td></td>
                                    </tr>
                                @else
                                    @foreach($allData as $key => $amount)
                                        <tr>
                                            <th>
                                               <strong>{{$key+1}}</strong>
                                            </th>
                                            <td>
                                                {{$amount['feeCategory']["name"]}}
                                            </td>
                                            <td>
                                                <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.feeAmountEdit',$amount->feeCategoryId)}}','GET','Changing',1,0);">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn m-btn--pill    btn-info m-btn m-btn--custom"
                                                        onclick="loadPage('{{route('api.detailsFeeCategory',$amount->feeCategoryId)}}','GET','Changing',1,0);">
                                                    Details
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



