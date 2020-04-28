<p></p>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($BlogItem['title_ge'])) { ?>
            {{ Form::text('title_ge',$BlogItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
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
        <?php if(isset($BlogItem['short_text_ge'])) { ?>
        {{ Form::text('short_text_ge',$BlogItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?} else{?>
        {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>

<div class="form-group col-md-12 col-sm-12">
    <label>ვიდეოს ლინკი YouTube</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($BlogItem['video'])) { ?>
        {{ Form::text('video',$BlogItem['video'], array('class'=>'form-control','placeholder'=>'ვიდეოს ლინკი YouTube')) }}
        <?} else{?>
        {{ Form::text('video',null, array('class'=>'form-control','placeholder'=>'ვიდეოს ლინკი YouTube')) }}
        <?}?>
    </div>
</div>
<p></p>

<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / ქართული</label>
    <?php if(isset($BlogItem['full_text_ge'])) { ?>
        {{ Form::textarea('full_text_ge',$BlogItem['full_text_ge'], array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ge')) }}
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
        <?php if(isset($BlogItem['description_ge'])) { ?>
            {{ Form::text('description_ge',$BlogItem['description_ge'], array('class'=>'form-control','placeholder'=>'აღწერა / ქართული')) }}
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
        <?php if(isset($BlogItem['keywords_ge'])) { ?>
            {{ Form::text('keywords_ge',$BlogItem['keywords_ge'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?} else{?>
            {{ Form::text('keywords_ge',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>მნიშვნელოვანი პროდუქტი</label>
    <select class="form-control" name="main">
        <option value="1" <?php if((isset($BlogItem["main"]) && $BlogItem["main"])  == 1)  echo ' selected="selected"'?>>მნიშვნელოვანი პროდუქტი</option>
        <option value="0" <?php if((isset($BlogItem["main"]) && $BlogItem["main"])  == 0)  echo ' selected="selected"'?>>ჩვეულებრივი პროდუქტი</option>
    </select>
</div>
<p></p>