@extends('Admin._masterPage')

@section('content')
    <div class="row">
        <div class="col-md-12" style="background-color: white">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase bpg_caps"> სტატიკური სურთების მართვა</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group open">
                        </div>
                    </div>
                </div>


                    <div class="col-md-4">
                        {{--ივენთის სურათის ადგილი--}}
                        <form action="{{route('update_event')}}"  method="post" enctype="multipart/form-data">
                            <div class="col-md-12 pad_left0 bg_white" >

                                <div class="form-group last">
                                    <div class="col-md-6 pad_left0">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new main_thumbnail logo_div_center">
                                                <img alt="" src="<?=asset('public/'.$Settings['event_bg']['image'] )?>" style=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists main_thumbnail"> </div>
                                            <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new col-md-12"> სურათის არჩევა </span>
                                        <span class="fileinput-exists"> შეცვლა </span>
                                        <span class="fileinput-exists"> ატვირთვა </span>
                                        <input type="file" name="image">
                                    </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> წაშლა </a>
                                                <!-- SIDEBAR BUTTONS -->
                                                <div class="col-md-12 button_box padding_top30">
                                                    <div class="form-actions col-md-8 col-sm-12">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn blue col-md-12 bpg_caps fbold text_center">ივენთის</button>
                                                    </div>
                                                </div>
                                                <!-- END SIDEBAR BUTTONS -->
                                            </div>

                                            <div class="padding_bottom20"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--სურათის ატვირთვა--}}
                    </div>
                    {{--ივენთის სურათის ადგილი--}}
                </div>
                <div class="col-md-4">
                    {{--სტანდარტული გვერდის სურათის ადგილი--}}
                    <form action="{{route('update_page')}}"  method="post" enctype="multipart/form-data">
                        <div class="col-md-12 pad_left0 bg_white" >

                            <div class="form-group last">
                                <div class="col-md-6 pad_left0">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new main_thumbnail logo_div_center">
                                            <img alt="" src="<?=asset('public/'.$Settings['page_bg']['image'] )?>" style=""/>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists main_thumbnail"> </div>
                                        <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new col-md-12"> სურათის არჩევა </span>
                                        <span class="fileinput-exists"> შეცვლა </span>
                                        <span class="fileinput-exists"> ატვირთვა </span>
                                        <input type="file" name="image">
                                    </span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> წაშლა </a>
                                            <!-- SIDEBAR BUTTONS -->
                                            <div class="col-md-12 button_box padding_top30">
                                                <div class="form-actions col-md-8 col-sm-12">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn blue col-md-12 bpg_caps fbold text_center">გვერდები</button>
                                                </div>
                                            </div>
                                            <!-- END SIDEBAR BUTTONS -->
                                        </div>

                                        <div class="padding_bottom20"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{--სურათის ატვირთვა--}}
                </div>
            <div class="col-md-3">
                {{--სტანდარტული გვერდის სურათის ადგილი--}}
                <form action="{{route('update_campaign')}}"  method="post" enctype="multipart/form-data">
                    <div class="col-md-12 pad_left0 bg_white" >

                        <div class="form-group last">
                            <div class="col-md-6 pad_left0">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new main_thumbnail logo_div_center">
                                        <img alt="" src="<?=asset('public/'.$Settings['campaign_bg']['image'] )?>" style=""/>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists main_thumbnail"> </div>
                                    <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new col-md-12"> სურათის არჩევა </span>
                                        <span class="fileinput-exists"> შეცვლა </span>
                                        <span class="fileinput-exists"> ატვირთვა </span>
                                        <input type="file" name="image">
                                    </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> წაშლა </a>
                                        <!-- SIDEBAR BUTTONS -->
                                        <div class="col-md-12 button_box padding_top30">
                                            <div class="form-actions col-md-8 col-sm-12">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn blue col-md-12 bpg_caps fbold text_center">კამპანია</button>
                                            </div>
                                        </div>
                                        <!-- END SIDEBAR BUTTONS -->
                                    </div>

                                    <div class="padding_bottom20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{--სურათის ატვირთვა--}}
            </div>
                {{--სტანდარტული გვერდის სურათის ადგილი--}}
            </div>




            <div  style="clear: both"></div>



            </div>
            <!-- END SAMPLE FORM PORTLET-->


@stop