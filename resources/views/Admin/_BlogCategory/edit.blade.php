@extends('Admin._masterPage')

@section('content')

    {{--DATA ADD EDIT BOX--}}
    <div class="row">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">

                <form action="{{route('manage_blog_post_edit')}}" method="post" enctype="multipart/form-data">
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
                                            @include('Admin._BlogCategory._Forms.GeBlogForms')
                                            {{--ქართული კონტენტი--}}
                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            {{--ინგლისური კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">

                                                    {{--ტექსტარეა ინგლისური--}}
                                                    @include('Admin._BlogCategory._Forms.EnBlogForms')
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
                                                    @include('Admin._BlogCategory._Forms.RuBlogForms')
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


                    <div class="col-md-12 button_box padding_top30 pad_left0">
                        <div class="form-actions col-md-12 col-sm-12">
                            <button type="submit" class="btn blue">დამატება</button>
                            <button type="button" class="btn default">გაუქმება</button>
                        </div>
                    </div>
                    <input type="hidden" name="menu_id" value="<?=$Blog['id']?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="padding_bottom20"></div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
    {{--DATA ADD EDIT BOX--}}



@stop