<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ReplyItem['title_en'])) { ?>
        {{ Form::text('title_en',$ReplyItem['title_en'], array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
        <?} else{?>
        {{ Form::text('title_en',null, array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
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
        <?php if(isset($ReplyItem['short_text_en'])) { ?>
        {{ Form::text('short_text_en',$ReplyItem['short_text_en'], array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
        <?} else{?>
        {{ Form::text('short_text_en',null, array('class'=>'form-control','placeholder'=>'თანამდებობა')) }}
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
        <?php if(isset($ReplyItem['full_text_en'])) { ?>
        {{ Form::text('full_text_en',$ReplyItem['full_text_en'], array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?} else{?>
        {{ Form::text('full_text_en',null, array('class'=>'form-control','placeholder'=>'კლიენტის შეფასება')) }}
        <?}?>
    </div>
</div>
<p></p>