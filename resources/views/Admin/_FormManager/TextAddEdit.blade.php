@extends('Admin._masterPage')

@section('content')

    {{--DATA ADD EDIT BOX--}}
    <div class="row">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">

                <form action="{{route($route)}}"  method="post" enctype="multipart/form-data">
                    <div class="col-md-12 padding_bottom50">

                        {{--ფორმის ელემენტების შემოტანა--}}
                        <div class="col-md-12">
                            {{--ტაბ მენიუ--}}
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-share font-dark"></i>
                                        <span class="caption-subject font-dark bold uppercase bpg_caps">ინფორმაციის შეყვანა სხვადასხვა ენაზე</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_tab1" data-toggle="tab"> ქართული </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_tab2" data-toggle="tab"> ინგლისური </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_tab3" data-toggle="tab"> რუსული </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_tab1">
                                           {{--ქართული კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">

                                                    {{--ტექსტარეა ქართული--}}
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label>შეიყვანეთ ტექსი ქართული</label>
                                                        <textarea name="full_text_ge" class="form-control ckreplace" id="ck-ge" rows="10">
                                                        <?
                                                           if(isset($PageText)) echo $PageText['full_text_ge'];
                                                        ?>
                                                        </textarea>
                                                    </div>
                                                    {{--ტექსტარეა ქართული--}}

                                                </div>
                                            </div>
                                           {{--ქართული კონტენტი--}}
                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            {{--ინგლისური კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">

                                                    {{--ტექსტარეა ინგლისური--}}
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label>შეიყვანეთ ტექსი ინგლისური</label>
                                                        <textarea name="full_text_en" class="form-control ckreplace" id="ck-en" rows="10">
                                                        <?
                                                            if(isset($PageText)) echo $PageText['full_text_en'];
                                                        ?>
                                                        </textarea>
                                                    </div>
                                                    {{--ტექსტარეა ინგლისური--}}

                                                </div>
                                            </div>
                                            {{--ინგლისური კონტენტი--}}
                                        </div>
                                        <div class="tab-pane" id="portlet_tab3">
                                            {{--რუსული კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">

                                                    {{--ტექსტარეა რუსული--}}
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label>შეიყვანეთ ტექსი რუსული</label>
                                                        <textarea name="full_text_ru" class="form-control ckreplace" id="ck-ru" rows="10">
                                                        <?
                                                            if(isset($PageText)) echo $PageText['full_text_ru'];
                                                        ?>
                                                        </textarea>
                                                    </div>
                                                    {{--ტექსტარეა რუსული--}}

                                                </div>
                                            </div>
                                            {{--რუსული კონტენტი--}}
                                        </div>
                                        <div class="padding_top25"></div>
                                    </div>
                                </div>
                            </div>
                            {{--ტაბ მენიუ--}}
                        </div>
                        {{-- ფორმის ელემენტების შემოტანა--}}
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-my" style="width:100%">
                            <div class="mt-widget-3">
                                <div class="mt-head blue">
                                    <div class="mt-head-icon">
                                        <div class="tile-body">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </div>
                                    </div>
                                    <a href="{{ asset('admin/filemanager') }}" target="_blank">
                                        <div class="mt-head-desc bpg_caps f18"> ფაილების ალტერნატიული ატვირთვა</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 button_box padding_top30 pad_left0">
                        <div class="form-actions col-md-12 col-sm-12">
                            <button type="submit" class="btn blue">დამატება</button>
                            <button type="button" class="btn default">გაუქმება</button>
                        </div>
                    </div>
                    <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="padding_bottom20"></div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
    {{--DATA ADD EDIT BOX--}}

    {{--MODULE SELECTOR Loop--}}
    @include('Admin._ModuleManager._Blocks.ModulesList')
    {{--MODULE SELECTOR Loop--}}

@stop