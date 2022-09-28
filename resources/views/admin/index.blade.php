@php
$countEmploye = count(\App\Models\Author::where("usertype","Employee")->get());
$countStudent = count(\App\Models\Author::where("usertype","Student")->get());
@endphp


@extends("admin.adminMaster")
@section("admin")
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
        <!-- END: Subheader -->
        <div class="m-content">
            <!--begin:: Widgets/Stats-->
            <!--end:: Widgets/Stats-->
            <!--Begin::Section-->

            <!--End::Section-->
            <!--Begin::Section-->
{{--            @if($user->usertype == "Employee" and $user->usertype == "Admin")--}}
                <div class="row">
                <div class="col-xl-12" >
                    <!--begin:: Widgets/Support Cases-->
                    <div class="m-portlet  m-portlet--full-height  m-portlet--unair" >
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        School information
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <div class="m-portlet__body"  >
                            <div class="m-widget16"  style="background-color: #ffffff8f">
                                <div class="row" >
                                    <div class="col-md-5" >
                                        <div class="m-widget16__head">
                                            <div class="m-widget16__item">
															<span class="m-widget16__sceduled">
																Type
															</span>
                                                <span class="m-widget16__amount m--align-right">
																Amount
															</span>
                                            </div>
                                        </div>
                                        <div class="m-widget16__body">
                                            <!--begin::widget item-->
                                            <div class="m-widget16__item">
															<span class="m-widget16__date">
																Number of Employees
															</span>
                                                <span class="m-widget16__price m--align-right m--font-brand">
																{{$countEmploye}}
															</span>
                                            </div>
                                            <!--end::widget item-->
                                            <!--begin::widget item-->
                                            <div class="m-widget16__item">
															<span class="m-widget16__date">
																Number of Student
															</span>
                                                <span class="m-widget16__price m--align-right m--font-accent">
																{{$countStudent}}
															</span>
                                            </div>
                                            <!--end::widget item-->
                                            <!--begin::widget item-->
                                            <div class="m-widget16__item">
															<span class="m-widget16__date">
																Number of Class
															</span>
                                                <span class="m-widget16__price m--align-right m--font-danger">
																25
															</span>
                                            </div>
                                            <!--end::widget item-->
                                            <!--begin::widget item-->
                                            <div class="m-widget16__item">
															<span class="m-widget16__date">
																land area
															</span>
                                                <span class="m-widget16__price m--align-right m--font-brand">
																20 Hectares
															</span>
                                            </div>
                                            <!--end::widget item-->
                                            <!--begin::widget item-->
                                            <div class="m-widget16__item">
															<span class="m-widget16__date">
																Net Prifit
															</span>
                                                <span class="m-widget16__price m--align-right m--font-brand">
																$18,540,60
															</span>
                                            </div>
                                            <!--end::widget item-->
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-info"></span>
                                            <span class="m-widget16__legend-text " >
                                                    History
                                                </span>
                                        </div>
                                        <div class="m-widget16__stats">


                                            <div class="m-widget16__legend">
                                                <span class="m-widget16__legend-bullet m--bg-info"></span>
                                                <p class="m-widget16__legend-text" style="color: black">
                                                    In 1962, James F. Hanrahan opened St. Thomas More to provide a close-knit, unique academic experience for boarding school students. The overarching objective was simple: each student would receive a multifaceted, heightened level of attention with zero contingency on past performance. Through developing a school that prioritizes inclusivity, he created a community that emphasizes individual effort, presents additional opportunity, and offers unwavering support – mentally, emotionally, academically, and athletically. Today, we continue to build on the pillars that our founder sculpted – moving forward with values so central to St. Thomas More’s identity – in order to further enrich young people around the world.
                                                </p>
                                            </div>

{{--                                            <div class="m-widget16__visual">--}}
{{--                                                <div id="m_chart_support_tickets" style="height: 180px"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="m-widget16__legends">--}}
{{--                                                <div class="m-widget16__legend">--}}
{{--                                                    <span class="m-widget16__legend-bullet m--bg-info"></span>--}}
{{--                                                    <span class="m-widget16__legend-text">--}}
{{--																	80% Margins--}}
{{--																</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="m-widget16__legend">--}}
{{--                                                    <span class="m-widget16__legend-bullet m--bg-accent"></span>--}}
{{--                                                    <span class="m-widget16__legend-text">--}}
{{--																	80% Profit--}}
{{--																</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="m-widget16__legend">--}}
{{--                                                    <span class="m-widget16__legend-bullet m--bg-danger"></span>--}}
{{--                                                    <span class="m-widget16__legend-text">--}}
{{--																	10% Lost--}}
{{--																</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Support Stats-->
                </div>

            </div>

{{--            @else--}}
{{--                <div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-12">--}}
{{--                            <!--begin:: Widgets/New Users-->--}}
{{--                            <div class="m-portlet m-portlet--full-height  m-portlet--unair">--}}
{{--                                <div class="m-portlet__head">--}}
{{--                                    <div class="m-portlet__head-caption">--}}
{{--                                        <div class="m-portlet__head-title">--}}
{{--                                            <h3 class="m-portlet__head-text">--}}
{{--                                                New Users--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="m-portlet__head-tools">--}}
{{--                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">--}}
{{--                                            <li class="nav-item m-tabs__item">--}}
{{--                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">--}}
{{--                                                    Today--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item m-tabs__item">--}}
{{--                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">--}}
{{--                                                    Month--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="m-portlet__body">--}}
{{--                                    <div class="tab-content">--}}
{{--                                        <div class="tab-pane active" id="m_widget4_tab1_content">--}}
{{--                                            <!--begin::Widget 14-->--}}
{{--                                            <div class="m-widget4">--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_4.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Anna Strong--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Visual Designer,Google Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_14.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Milano Esco--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Product Designer, Apple Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_11.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Nick Bold--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Web Developer, Facebook Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_1.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Wiltor Delton--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Project Manager, Amazon Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_5.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Nick Stone--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Visual Designer, Github Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Widget 14-->--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane" id="m_widget4_tab2_content">--}}
{{--                                            <!--begin::Widget 14-->--}}
{{--                                            <div class="m-widget4">--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_2.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Kristika Bold--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Product Designer,Apple Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_13.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Ron Silk--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Release Manager, Loop Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_9.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Nick Bold--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Web Developer, Facebook Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_2.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Wiltor Delton--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Project Manager, Amazon Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                                <!--begin::Widget 14 Item-->--}}
{{--                                                <div class="m-widget4__item">--}}
{{--                                                    <div class="m-widget4__img m-widget4__img--pic">--}}
{{--                                                        <img src="{{asset('backend/assets/app/media/img/users/100_8.jpg')}}" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__info">--}}
{{--															<span class="m-widget4__title">--}}
{{--																Nick Bold--}}
{{--															</span>--}}
{{--                                                        <br>--}}
{{--                                                        <span class="m-widget4__sub">--}}
{{--																Web Developer, Facebook Inc--}}
{{--															</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="m-widget4__ext">--}}
{{--                                                        <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">--}}
{{--                                                            Follow--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Widget 14 Item-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Widget 14-->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end:: Widgets/New Users-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}


            <!--End::Section-->
            <!--Begin::Section-->

            <!--End::Section-->
            <!--Begin::Section-->

            <!--End::Section-->
            <!--Begin::Section-->

            <!--End::Section-->
        </div>
    </div>

@endsection


