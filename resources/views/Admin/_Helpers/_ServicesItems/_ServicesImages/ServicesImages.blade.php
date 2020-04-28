<div class="row" id="images">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase bpg_caps"> პროდუქციის დამატებითი სურათები</span>
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

            <form action="{{route($MoreImgRoute)}}"  method="post" enctype="multipart/form-data">
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
                                    <div class="cbp-caption" >
                                        <div class="cbp-caption-defaultWrap" >
                                            <img src="{{ asset('public/'.$TableImage->image) }}" class="admin_gallery_tumb">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="{{ asset($lang) }}/admin/services_images/delate/{{ $TableItem['id'] }}/{{ $TableImage->id }}" class="cbp-l-caption-buttonLeft btn red uppercase btn red uppercase padding_all_10 bpg_caps fbold">
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
                <?php if(isset($TableItem)){?> <input type="hidden" name="current_image" value="{{$TableItem['image']}}"><?}?> {{--არსებობს თუ არა სურათის რედქატირების დროს--}}
                <?php if(isset($TableItem)){?> <input type="hidden" name="record_item_id" value="{{$TableItem['id']}}"><?}?> {{--პროდუქციის ID-ი რედაქტირების შემთხვევაში--}}
                <input type="hidden" name="module" value="{{ $Table }}">
                <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>


            <div class="padding_bottom20"></div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>

</div>