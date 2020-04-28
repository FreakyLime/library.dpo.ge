@extends('Admin._masterPage')

@section('content')

<h1 class="page-title bpg_caps fbold"> მთავარი გვერდი
    <small></small>
</h1>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                {{--სურათის ატვირთვა--}}
                <form action="{{route('update_logo_website_title')}}"  method="post" enctype="multipart/form-data">
                <div class="col-md-12 pad_left0">
                    <div class="col-md-12 caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase bpg_caps f20">საიტის ლოგო და სახელი</span>
                    </div>
                    <div class="form-group last">
                        <div class="col-md-12 pad_left0">
                            <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 10px">
                                <div class="fileinput-new main_thumbnail logo_div_center">
                                    <img alt="" src="<?=asset('public/'.$Settings['logo']['image'] )?>" style="max-width: 120px; max-height: 65px;"/>
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

                                <div class="form-group col-md-12 col-sm-12 pad_left0 pad_right0">
                                    <label>საიტის დასახელება ქართული</label>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                        <input name="title_ge" type="text" class="form-control" placeholder="სათაური ქართული" value="{{ $Settings['website_title']['title_ge'] }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 pad_left0 pad_right0">
                                    <label>საიტის დასახელება ინგლისური</label>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                        <input name="title_en" type="text" class="form-control" placeholder="სათაური ინგლისური" value="{{ $Settings['website_title']['title_en'] }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 pad_left0 pad_right0">
                                    <label>საიტის დასახელება რუსული</label>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                        <input name="title_ru" type="text" class="form-control" placeholder="სათაური რუსული" value="{{ $Settings['website_title']['title_ru'] }}">
                                    </div>
                                </div>
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
            <div class="col-md-12 caption caption-md">
                <i class="icon-bar-chart theme-font hide"></i>
                <span class="caption-subject font-blue-madison bold uppercase bpg_caps f20">ენების ჩართვა გამორთვა</span>
            </div>
            <div class="portlet light ">
                <!-- ენების მართვა გამოჩენა დამალვა საიტზე -->
                    <form action="{{ route('onn_off_lang') }}"  method="post" enctype="multipart/form-data">
                    <div class="row list-separated profile-stat padding_top10">

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="uppercase profile-stat-title">
                                <img src="<?=asset('public/files/flags/ge.png')?>" width="45" />
                            </div>
                            <div class="uppercase profile-stat-text margin_top10">
                                <input type="hidden" name="lang[ge]" value="0" />
                                <input name="lang[ge]" type="checkbox" <? echo ($Settings['langs']['title_ge'] == 1) ? 'checked' : ''?> class="make-switch"  data-size="mini" value="{{ $Settings['langs']['title_ge'] }}">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="uppercase profile-stat-title">
                                <img src="<?=asset('public/files/flags/en.png')?>" width="45" />
                            </div>
                            <div class="uppercase profile-stat-text margin_top10">
                                <input type="hidden" name="lang[en]" value="0" />
                                <input name="lang[en]" type="checkbox" <? echo ($Settings['langs']['title_en'] == 1) ? 'checked' : ''?> class="make-switch"  data-size="mini" value="{{ $Settings['langs']['title_en'] }}">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="uppercase profile-stat-title">
                                <img src="<?=asset('public/files/flags/ru.png')?>" width="45" />
                            </div>
                            <div class="uppercase profile-stat-text margin_top10">
                                <input type="hidden" name="lang[ru]" value="0" />
                                <input name="lang[ru]" type="checkbox" <? echo ($Settings['langs']['title_ru'] == 1) ? 'checked' : ''?>  class="make-switch"   data-size="mini" value="{{ $Settings['langs']['title_ru'] }}">
                            </div>
                        </div>
                        <div class="col-md-12 button_box padding_top30">
                            <div class="form-actions col-md-12 col-sm-12">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn blue col-md-12 bpg_caps fbold text_center">ენების ჩართვა/გამორთვა</button>
                            </div>
                        </div>

                    </div>
                </form>
                <!-- ენების მართვა გამოჩენა დამალვა საიტზე -->

                <!-- END STAT -->
                <div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="{{ $Settings['website']['url'] }}" target="{{ $Settings['youtube']['target'] }}">{{ $Settings['website']['url'] }}</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-facebook"></i>
                        <a href="{{ $Settings['facebook']['url'] }}" target="{{ $Settings['youtube']['target'] }}"> Facebook</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-youtube"></i>
                        <a href="{{ $Settings['youtube']['url'] }}" target="{{ $Settings['youtube']['target'] }}"> YouTube</a>
                    </div>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->

        <!-- ბლოკების შემოტანა ბოლოს დამატებული ინფორმაციის გამოჩენა -->
        <div class="profile-content">
            <div class="row">
                {{--ბოლო სიახლეები--}}
                @include('Admin._Mainpage._Blocks.LastNews')
                {{--ბოლო სიახლეები--}}

                {{--ბოლო სლაიდები--}}
                @include('Admin._Mainpage._Blocks.LastSlides')
                {{--ბოლო სლაიდები--}}
            </div>
            <div style="height: 20px; clear: both"></div>
            <div class="row">
                {{--ბოლო ალბომები--}}
                @include('Admin._Mainpage._Blocks.LastAlbum')
                {{--ბოლო ალბომები--}}

                {{--ბოლო ვიდეოები--}}
                @include('Admin._Mainpage._Blocks.LastVideos')
                {{--ბოლო ვიდეოები--}}

            </div>
        </div>
        <!-- ბლოკების შემოტანა ბოლოს დამატებული ინფორმაციის გამოჩენა -->
    </div>
</div>

<!-- ენების მართვა გამოჩენა დამალვა საიტზე -->
<script>
    $( document ).ready(function() {
        $('.make-switch').on('change.bootstrapSwitch',function(event)
        {
            if($(this).is(':checked'))
            {
                $(this).val("1");
            }
            else
            {
                $(this).val("0");
            }
        })
    });
</script>
<!-- ენების მართვა გამოჩენა დამალვა საიტზე -->

@stop