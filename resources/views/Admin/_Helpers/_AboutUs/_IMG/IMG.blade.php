<div class="col-md-4">
    {{--სურათის ადგილი--}}
    <div class="portlet light profile-sidebar-portlet ">
        {{--სურათის ატვირთვა--}}
        <form action="{{route('update_about_us_cover')}}"  method="post" enctype="multipart/form-data">
            <div class="col-md-12 pad_left0 bg_white">
                <div class="col-md-12 caption caption-md">
                    <i class="icon-bar-chart theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase bpg_caps f20">საიტის ლოგო და სახელი</span>
                </div>
                <div class="form-group last">
                    <div class="col-md-12 pad_left0">
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 10px">
                            <div class="fileinput-new main_thumbnail logo_div_center">
                                <img alt="" src="<?=asset('public/'.$Settings['about_cover']['image'] )?>" style="max-width: 120px; max-height: 65px;"/>
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
                            </div>

                            <div class="padding_bottom20"></div>
                        </div>
                    </div>
                </div>
            </div>
        {{--სურათის ატვირთვა--}}
        <!-- SIDEBAR BUTTONS -->
            <div class="col-md-12 button_box padding_top30">
                <div class="form-actions col-md-12 col-sm-12">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn blue col-md-12 bpg_caps fbold text_center">ინფორმაციის განახლება</button>
                </div>
            </div>
        </form>
        <!-- END SIDEBAR BUTTONS -->
    </div>
    {{--სურათის ადგილი--}}
</div>