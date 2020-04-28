<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ReplyItem['title_ge'])) { ?>
        {{ Form::text('title_ge',$ReplyItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
        <?} else{?>
        {{ Form::text('title_ge',null, array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
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
        <? if(isset($ReplyItem['short_text_ge'])) { ?>
        {{ Form::text('short_text_ge',$ReplyItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
        <?} else{?>
        {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
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
        <? if(isset($ReplyItem['full_text_ge'])) { ?>
        {{ Form::text('full_text_ge',$ReplyItem['full_text_ge'], array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?} else{?>
        {{ Form::text('full_text_ge',null, array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?}?>
    </div>
</div>
<p></p>