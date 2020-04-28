@extends('Admin._masterPage')

@section('content')

    {{--DATA ADD EDIT BOX--}}
    <div class="row">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase bpg_caps"> ახალი ივენთის დამატება</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group open">
                            <a href="{{ asset($lang) }}/admin/events/{{ $menu_id }}" class="btn btn-lg purple bpg_caps f18">
                                <i class="fa fa-arrow-left"></i>  უკან დაბრუნება
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <p>
                            @if ($errors->any())
                                <i class="icon-settings font-red-sunglo"></i> <?php echo implode('', $errors->all(':message')) ?>
                            @endif
                        </p>
                    </div>
                </div>
                <form action="{{route($route)}}"  method="post" enctype="multipart/form-data">
                    <div class="col-md-12 padding_bottom50">
                        {{--სურათის ატვირთვა--}}
                        <div class="col-md-3 pad_left0">
                            <div class="form-group last padding_top65">
                                <div class="col-md-12 pad_left0">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 365px; height: 220px;">
                                            <img src="
                                                <?php if(isset($TableItem->image)) echo asset('public/'.$TableItem->image);
                                            else echo "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";?>
                                                    " alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="width: 365px; height: 220px;"> </div>
                                        <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> სურათის არჩევა </span>
                                            <span class="fileinput-exists"> შეცვლა </span>
                                            <input type="file" name="image">
                                        </span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> წაშლა </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--სურათის ატვირთვა--}}

                        {{--ფორმის ელემენტების შემოტანა--}}
                        <div class="col-md-9">
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
                                                    @include('Admin._Helpers._Events._FormBlocks.GeEventsForms')
                                                </div>
                                            </div>
                                           {{--ქართული კონტენტი--}}
                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            {{--ინგლისური კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">
                                                    @include('Admin._Helpers._Events._FormBlocks.EnEventsForms')
                                                </div>
                                            </div>
                                            {{--ინგლისური კონტენტი--}}
                                        </div>
                                        <div class="tab-pane" id="portlet_tab3">
                                            {{--რუსული კონტენტი--}}
                                            <div class="portlet-body form">

                                                <div class="form-body">
                                                    @include('Admin._Helpers._Events._FormBlocks.RuEventsForms')
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
                    <?php if(isset($TableItem)){?> <input type="hidden" name="current_image" value="{{$TableItem['image']}}"><?}?> {{--არსებობს თუ არა სურათის რედქატირების დროს--}}
                    <?php if(isset($TableItem)){?> <input type="hidden" name="current_tumb" value="{{$TableItem['tumb']}}"><?}?> {{--არსებობს თუ არა პატარა სურათის რედქატირების დროს--}}
                    <?php if(isset($TableItem)){?> <input type="hidden" name="record_item_id" value="{{$TableItem['id']}}"><?}?> {{--პროდუქციის ID-ი რედაქტირების შემთხვევაში--}}
                    <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="padding_bottom20"></div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
    {{--DATA ADD EDIT BOX--}}





    {{--MORE IMAGES BOX--}}
    <?php if(isset($TableImages)){?>
        @include('Admin._Helpers._Events._EventsImages.EventsImages')
    <?}?>
    {{--MORE IMAGES BOX--}}

@stop