<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['title_ge'])) { ?>
            {{ Form::text('title_ge',$TableItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
        <?} else{?>
            {{ Form::text('title_ge',null, array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>მოკლე ტექსტი / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['short_text_ge'])) { ?>
            {{ Form::text('short_text_ge',$TableItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?} else{?>
            {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>

{{--SOCIAL--}}
<div class="form-group col-md-4 col-sm-4">
    <label>ფეისბუქი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['facebook'])) { ?>
        {{ Form::text('facebook',$TableItem['facebook'], array('class'=>'form-control','placeholder'=>'ფეისბუქი')) }}
        <?} else{?>
        {{ Form::text('facebook',null, array('class'=>'form-control','placeholder'=>'ფეისბუქი')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-4 col-sm-4">
    <label>გუგლ პლიუსი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['googleplus'])) { ?>
        {{ Form::text('googleplus',$TableItem['googleplus'], array('class'=>'form-control','placeholder'=>'გუგლ პლიუსი')) }}
        <?} else{?>
        {{ Form::text('googleplus',null, array('class'=>'form-control','placeholder'=>'გუგლ პლიუსი')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-4 col-sm-4">
    <label>ტვიტერი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['twitter'])) { ?>
        {{ Form::text('twitter',$TableItem['twitter'], array('class'=>'form-control','placeholder'=>'ტვიტერი')) }}
        <?} else{?>
        {{ Form::text('twitter',null, array('class'=>'form-control','placeholder'=>'ტვიტერი')) }}
        <?}?>
    </div>
</div>
<p></p>
{{--SOCIAL--}}

<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / ქართული</label>
    <?php if(isset($TableItem['full_text_ge'])) { ?>
        {{ Form::textarea('full_text_ge',$TableItem['full_text_ge'], array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ge')) }}
    <?} else{?>
        {{ Form::textarea('full_text_ge',null, array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ge')) }}
    <?}?>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>აღწერა / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['description_ge'])) { ?>
            {{ Form::text('description_ge',$TableItem['description_ge'], array('class'=>'form-control','placeholder'=>'აღწერა / ქართული')) }}
        <?} else{?>
            {{ Form::text('description_ge',null, array('class'=>'form-control','placeholder'=>'აღწერა / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>საკვანძო სიტყვები / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($TableItem['keywords_ge'])) { ?>
            {{ Form::text('keywords_ge',$TableItem['keywords_ge'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?} else{?>
            {{ Form::text('keywords_ge',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>