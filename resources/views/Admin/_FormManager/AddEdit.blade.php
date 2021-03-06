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
                    <span class="caption-subject bold uppercase bpg_caps"> ახალი ჩანაწერის გაკეთება</span>
                </div>
                <div class="actions">
                    <div class="btn-group open">
                        <a href="{{ asset($lang) }}/admin/{{ $Table }}_module/list/{{ $menu_id }}" class="btn btn-lg purple bpg_caps f18">
                            <i class="fa fa-arrow-left"></i> უკან დაბრუნება
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
            <form action="{{route($route)}}" method="post" enctype="multipart/form-data">
                <div class="col-md-12 padding_bottom50">
                    {{--სურათის ატვირთვა--}}
                    <div class="col-md-3 pad_left0">
                        <div class="form-group last padding_top65">
                            <div class="col-md-12 pad_left0">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 365px; height: 220px;">
                                        <img src="
                                            <?php if (isset($TableItem->image)) echo asset('public/' . $TableItem->image);
                                            else echo "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"; ?>
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
                                <div style="padding-top:20px !important;width:100%;">
                                    <!-- თუ რომელიმე ფაილი მიმაგრებულია !-->
                                    <h4>მიმაგრებული ფაილები</h4>
                                    @if(isset($TableItem) && !is_null($TableItem->document_ge) && $TableItem->document_ge != "[]")
                                    <?php $attachedFles = json_decode($TableItem->document_ge, true); ?>
                                    @foreach($attachedFles as $key => $file)
                                    <div class="row">
                                        <div class="cols col-sm-1">
                                            <img src="/public/files/file_types/{{pathinfo($file,PATHINFO_EXTENSION)}}.png" style="width:16px">
                                        </div>
                                        <div class="cols col-sm-10">
                                            <a href="{{env('APP_URL')}}{{$file}}" style="word-wrap:break-word">{{pathinfo($file,PATHINFO_FILENAME)}}</a>
                                        </div>
                                        <div class="cols col-sm-1 text-right">
                                            <a href="#" onclick="unsetFile('ge', '{{$key}}')"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <hr />
                                    @endforeach
                                    @endif

                                    @if(isset($TableItem) && !is_null($TableItem->document_en) && $TableItem->document_en != "[]")
                                    <?php $attachedFles = json_decode($TableItem->document_en, true); ?>
                                    @foreach($attachedFles as $file)
                                    <div class="row">
                                        <div class="cols col-sm-1">
                                            <img src="/public/files/file_types/{{pathinfo($file,PATHINFO_EXTENSION)}}.png" style="width:16px">
                                        </div>
                                        <div class="cols col-sm-10">
                                            <a href="{{env('APP_URL')}}{{$file}}" style="word-wrap:break-word">{{pathinfo($file,PATHINFO_FILENAME)}}</a>
                                        </div>
                                        <div class="cols col-sm-1 text-right">
                                            <a href=""><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <hr />
                                    @endforeach
                                    @endif

                                    @if(isset($TableItem) && !is_null($TableItem->document_ru) && $TableItem->document_ru != "[]")
                                    <?php $attachedFles = json_decode($TableItem->document_ru, true); ?>
                                    @foreach($attachedFles as $file)
                                    <div class="row">
                                        <div class="cols col-sm-1">
                                            <img src="/public/files/file_types/{{pathinfo($file,PATHINFO_EXTENSION)}}.png" style="width:16px">
                                        </div>
                                        <div class="cols col-sm-10">
                                            <a href="{{env('APP_URL')}}{{$file}}" style="word-wrap:break-word">{{pathinfo($file,PATHINFO_FILENAME)}}</a>
                                        </div>
                                        <div class="cols col-sm-1 text-right">
                                            <a href=""><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <hr />
                                    @endforeach
                                    @endif

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

                                                @foreach($FormManagerGE as $ModuleForm)
                                                <p>
                                                    <?php $source = 'Admin._FormManager._FormBlocks.' . $ModuleForm["include"] ?>
                                                </p>
                                                @include($source)
                                                @endforeach
                                            </div>
                                        </div>
                                        {{--ქართული კონტენტი--}}
                                    </div>
                                    <div class="tab-pane" id="portlet_tab2">
                                        {{--ინგლისური კონტენტი--}}
                                        <div class="portlet-body form">

                                            <div class="form-body">

                                                @foreach($FormManagerEN as $ModuleForm)
                                                <p>
                                                    <?php $source = 'Admin._FormManager._FormBlocks.' . $ModuleForm["include"] ?>
                                                </p>
                                                @include($source)
                                                @endforeach
                                            </div>
                                        </div>
                                        {{--ინგლისური კონტენტი--}}
                                    </div>
                                    <div class="tab-pane" id="portlet_tab3">
                                        {{--რუსული კონტენტი--}}
                                        <div class="portlet-body form">

                                            <div class="form-body">

                                                @foreach($FormManagerRU as $ModuleForm)
                                                <p>
                                                    <?php $source = 'Admin._FormManager._FormBlocks.' . $ModuleForm["include"] ?>
                                                </p>
                                                @include($source)
                                                @endforeach
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
                        <button type="submit" id="formSubmit" class="btn blue">დამატება</button>
                        <button type="button" class="btn default">გაუქმება</button>
                    </div>
                </div>
                <?php if (isset($TableItem)) { ?> <input type="hidden" name="current_image" value="{{$TableItem->image}}"><?php } ?> {{--არსებობს თუ არა სურათის რედქატირების დროს--}}
                <?php if (isset($TableItem)) { ?> <input type="hidden" name="current_tumb" value="{{$TableItem->tumb}}"><?php } ?> {{--არსებობს თუ არა პატარა სურათის რედქატირების დროს--}}
                <?php if (isset($TableItem)) { ?> <input type="hidden" name="record_item_id" value="{{$TableItem->id}}"><?php } ?> {{--სიახლის ID-ი რედაქტირების შემთხვევაში--}}

                <?php if (isset($TableItem)) { ?> <input type="hidden" id="current_document_ge" name="current_document_ge" value="{{$TableItem->document_ge}}"><?php } ?> {{--თუ არსებობს ძველი დოკუმენტები--}}
                <?php if (isset($TableItem)) { ?> <input type="hidden" id="current_document_en" name="current_document_en" value="{{$TableItem->document_en}}"><?php } ?> {{--თუ არსებობს ძველი დოკუმენტები--}}
                <?php if (isset($TableItem)) { ?> <input type="hidden" id="current_document_ru" name="current_document_ru" value="{{$TableItem->document_ru}}"><?php } ?> {{--თუ არსებობს ძველი დოკუმენტები--}}

                <input type="hidden" name="module" value="{{ $Table }}">
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
<?php if (isset($TableImages)) { ?>
    <div class="row" id="images">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase bpg_caps"> სიახლის დამატებითი სურათები</span>
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

                <form action="{{route($MoreImgRoute)}}" method="post" id="editForm" enctype="multipart/form-data">
                    <div class="col-md-12 padding_bottom50">
                        {{--სურათის ატვირთვა--}}
                        <div class="col-md-3 pad_left0">
                            <div class="form-group last ">
                                <div class="col-md-12 pad_left0">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
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

                                        <div class="padding_bottom20"></div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label>ქართული</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input name="title_ge" type="text" class="form-control" placeholder="სათაური ქართული" value="">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label>ინგლისური</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input name="title_en" type="text" class="form-control" placeholder="სათაური ინგლისური" value="">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label>რუსული</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input name="title_ru" type="text" class="form-control" placeholder="სათაური რუსული" value="">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--სურათის ატვირთვა--}}

                        {{--სურათის შემოტანა--}}
                        <div class="col-md-9">
                            {{--IMAGE LOOP--}}
                            <div id="js-grid-juicy-projects" class="cbp">
                                @foreach($TableImages as $TableImage)
                                <div class="cbp-item graphic">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ asset('public/'.$TableImage->image) }}" class="admin_gallery_tumb">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="{{ asset($lang) }}/admin/more_images/delete_image/{{ $Table }}/{{ $TableItem->id }}/{{ $TableImage->id }}" class="cbp-l-caption-buttonLeft btn red uppercase btn red uppercase padding_all_10 bpg_caps fbold">
                                                        წაშლა
                                                    </a>
                                                    <a href="{{ asset('public/'.$TableImage->image) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase padding_all_10 bpg_caps fbold" data-title="{{ $TableImage['title_'.$lang] }}">
                                                        გადიდება
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{ $TableImage['title_'.$lang] }}</div>
                                </div>
                                @endforeach
                            </div>
                            {{--IMAGE LOOP--}}
                        </div>

                        {{--სურათის შემოტანა--}}
                    </div>
                    <div class="col-md-12 button_box padding_top30 pad_left0">
                        <div class="form-actions col-md-12 col-sm-12">
                            <button type="submit" class="btn blue">დამატება</button>
                            <button type="button" class="btn default">გაუქმება</button>
                        </div>
                    </div>
                    <?php if (isset($TableItem)) { ?> <input type="hidden" name="current_image" value="{{$TableItem->image}}"><?php } ?> {{--არსებობს თუ არა სურათის რედქატირების დროს--}}
                    <?php if (isset($TableItem)) { ?> <input type="hidden" name="record_item_id" value="{{$TableItem->id}}"><?php } ?> {{--სიახლის ID-ი რედაქტირების შემთხვევაში--}}
                    <input type="hidden" name="module" value="{{ $Table }}">
                    <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>


                <div class="padding_bottom20"></div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
<?php } ?>
{{--MORE IMAGES BOX--}}

<script>
    function unsetFile(l, i) {
        var f = $('#current_document_' + l).val();
        f = JSON.parse(f);
        f[i] = undefined;
        $('#current_document_' + l).val(JSON.stringify(f))
        $("#formSubmit").click();
    }
</script>

@stop