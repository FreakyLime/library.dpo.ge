<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ServiceItem['title_en'])) { ?>
        {{ Form::text('title_en',$ServiceItem['title_en'], array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
        <?} else{?>
        {{ Form::text('title_en',null, array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12col-sm-12">
    <label>მოკლე ტექსტი / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($ServiceItem['short_text_en'])) { ?>
        {{ Form::text('short_text_en',$ServiceItem['short_text_en'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ინგლისური')) }}
        <?} else{?>
        {{ Form::text('short_text_en',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>