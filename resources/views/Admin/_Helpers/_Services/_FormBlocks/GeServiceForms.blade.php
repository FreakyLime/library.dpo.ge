<div class="form-group col-md-12 col-sm-12">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['title_ge'])) { ?>
        {{ Form::text('title_ge',$ServiceItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
        <?} else{?>
        {{ Form::text('title_ge',null, array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>მოკლე ტექსტი / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['short_text_ge'])) { ?>
        {{ Form::text('short_text_ge',$ServiceItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?} else{?>
        {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>URL-ლინკი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['url'])) { ?>
        {{ Form::text('url',$ServiceItem['url'], array('class'=>'form-control','placeholder'=>'URL-ლინკი')) }}
        <?} else{?>
        {{ Form::text('url',null, array('class'=>'form-control','placeholder'=>'URL-ლინკი')) }}
        <?}?>
    </div>
</div>

<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>პრიორიტეტი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($ServiceItem['pos'])) { ?>
        {{ Form::text('pos',$ServiceItem['pos'], array('class'=>'form-control','placeholder'=>'პრიორიტეტი')) }}
        <?} else{?>
        {{ Form::text('pos',null, array('class'=>'form-control','placeholder'=>'პრიორიტეტი')) }}
        <?}?>
    </div>
</div>

<div class="form-group col-md-12 col-sm-12">
    <label>მნიშვნელოვანი სერვისი</label>
    <select class="form-control" name="main">
        <option value="1" <?php if(isset($ServiceItem["main"]) && isset($ServiceItem["main"]) == 1)  echo ' selected="selected"'?>>მნიშვნელოვანი სერვისი</option>
        <option value="0" <?php if(isset($ServiceItem["main"]) && isset($ServiceItem["main"]) == 0)  echo ' selected="selected"'?>>ჩვეულებრივი სერვისი</option>
    </select>
</div>
<p></p>