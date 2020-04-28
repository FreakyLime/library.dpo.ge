<p></p>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($SaleItem['title_ru'])) { ?>
        {{ Form::text('title_ru',$SaleItem['title_ru'], array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?} else{?>
        {{ Form::text('title_ru',null, array('class'=>'form-control','placeholder'=>'სათაური / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>მოკლე ტექსტი / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($SaleItem['short_text_ru'])) { ?>
        {{ Form::text('short_text_ru',$SaleItem['short_text_ru'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / რუსული')) }}
        <?} else{?>
        {{ Form::text('short_text_ru',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / რუსული</label>
    <?php if(isset($SaleItem['full_text_ru'])) { ?>
    {{ Form::textarea('full_text_ru',$SaleItem['full_text_ru'], array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ru')) }}
    <?} else{?>
    {{ Form::textarea('full_text_ru',null, array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ru')) }}
    <?}?>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>აღწერა / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($SaleItem['description_ru'])) { ?>
        {{ Form::text('description_ru',$SaleItem['description_ru'], array('class'=>'form-control','placeholder'=>'აღწერა / რუსული')) }}
        <?} else{?>
        {{ Form::text('description_ru',null, array('class'=>'form-control','placeholder'=>'აღწერა / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>საკვანძო სიტყვები / რუსული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <?php if(isset($SaleItem['keywords_ru'])) { ?>
        {{ Form::text('keywords_ru',$SaleItem['keywords_ru'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / რუსული')) }}
        <?} else{?>
        {{ Form::text('keywords_ru',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / რუსული')) }}
        <?}?>
    </div>
</div>
<p></p>