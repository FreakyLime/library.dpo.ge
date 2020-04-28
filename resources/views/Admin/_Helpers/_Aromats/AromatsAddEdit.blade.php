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
                        <span class="caption-subject bold uppercase bpg_caps"> ახალი არომატის დამატება</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group open">
                            <a href="{{ asset($lang) }}/admin/prod_aromats/{{ $menu_id }}" class="btn btn-lg purple bpg_caps f18">
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

                        {{--ფორმის ელემენტების შემოტანა--}}
                        <div class="col-md-12">

                                {{--ქართული--}}
                                <div class="form-group col-md-12 col-sm-12">
                                    <label>სათაური / ქართული</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <?php if(isset($AromatsItem['title_ge'])) { ?>
                                        {{ Form::text('title_ge',$AromatsItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
                                        <?} else{?>
                                        {{ Form::text('title_ge',null, array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
                                        <?}?>
                                    </div>
                                </div>
                                {{--ქართული--}}

                            {{--ინგლისური--}}
                            <div class="form-group col-md-12 col-sm-12">
                                <label>სათაური / ინგლისური</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <?php if(isset($AromatsItem['title_en'])) { ?>
                                    {{ Form::text('title_en',$AromatsItem['title_en'], array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
                                    <?} else{?>
                                    {{ Form::text('title_en',null, array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
                                    <?}?>
                                </div>
                            </div>
                            {{--ინგლისური--}}

                            {{--რუსული--}}
                            <div class="form-group col-md-12 col-sm-12">
                                <label>სათაური / რუსული</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <?php if(isset($AromatsItem['title_ru'])) { ?>
                                    {{ Form::text('title_ru',$AromatsItem['title_ru'], array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
                                    <?} else{?>
                                    {{ Form::text('title_ru',null, array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
                                    <?}?>
                                </div>
                            </div>
                            {{--რუსული--}}


                        </div>
                        {{-- ფორმის ელემენტების შემოტანა--}}
                    </div>


                    <div class="col-md-12 button_box padding_top30 pad_left0">
                        <div class="form-actions col-md-12 col-sm-12">
                            <button type="submit" class="btn blue">დამატება</button>
                            <button type="button" class="btn default">გაუქმება</button>
                        </div>
                    </div>
                    <?php if(isset($AromatsItem)){?> <input type="hidden" name="record_item_id" value="{{$AromatsItem['id']}}"><?}?> {{--პროდუქციის ID-ი რედაქტირების შემთხვევაში--}}
                    <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="padding_bottom20"></div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
    {{--DATA ADD EDIT BOX--}}

@stop