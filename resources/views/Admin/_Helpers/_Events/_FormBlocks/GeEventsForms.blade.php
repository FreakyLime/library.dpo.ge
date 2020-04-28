<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($TableItem['title_ge'])) { ?>
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
        <? if(isset($TableItem['short_text_ge'])) { ?>
            {{ Form::text('short_text_ge',$TableItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?} else{?>
            {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>

<div class="form-group col-md-6 col-sm-6">
    <label>ივენთის თარიღი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($TableItem['date'])) { ?>
        {{ Form::date('date',$TableItem['date'], array('class'=>'form-control','placeholder'=>'ივენთის თარიღი')) }}
        <?} else{?>
        {{ Form::date('date',null, array('class'=>'form-control','placeholder'=>'ივენთის თარიღი')) }}
        <?}?>
    </div>
</div>
<p></p>

<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / ქართული</label>
    <? if(isset($TableItem['full_text_ge'])) { ?>
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
        <? if(isset($TableItem['description_ge'])) { ?>
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
        <? if(isset($TableItem['keywords_ge'])) { ?>
            {{ Form::text('keywords_ge',$TableItem['keywords_ge'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?} else{?>
            {{ Form::text('keywords_ge',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>მნიშვნელოვანი სერვისი</label>
    <select class="form-control" name="main">
        <option value="1" <? if(isset($TableItem["main"]) && $TableItem["main"] == 1) echo ' selected="selected"'?>>მნიშვნელოვანი სერვისი</option>
        <option value="0" <? if(isset($TableItem["main"]) && $TableItem["main"] == 0)  echo ' selected="selected"'?>>ჩვეულებრივი სერვისი</option>
    </select>
</div>
<p></p>