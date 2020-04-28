<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['title_ru'])) { ?>
        {{ Form::text('title_ru',$ServiceItem['title_ru'], array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?} else{?>
        {{ Form::text('title_ru',null, array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>მოკლე ტექსტი / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['short_text_ru'])) { ?>
        {{ Form::text('short_text_ru',$ServiceItem['short_text_ru'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / რუსული')) }}
        <?} else{?>
        {{ Form::text('short_text_ru',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>