<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ReplyItem['title_ru'])) { ?>
        {{ Form::text('title_ru',$ReplyItem['title_ru'], array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?} else{?>
        {{ Form::text('title_ru',null, array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>თანამდებობა</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ReplyItem['short_text_ru'])) { ?>
        {{ Form::text('short_text_ru',$ReplyItem['short_text_ru'], array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
        <?} else{?>
        {{ Form::text('short_text_ru',null, array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>კლიენტის შეფასება</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ReplyItem['full_text_ru'])) { ?>
        {{ Form::text('full_text_ru',$ReplyItem['full_text_ru'], array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?} else{?>
        {{ Form::text('full_text_ru',null, array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?}?>
    </div>
</div>
<p></p>