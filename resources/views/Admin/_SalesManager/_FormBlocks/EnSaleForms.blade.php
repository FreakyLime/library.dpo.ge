<p></p>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['title_en'])) { ?>
            {{ Form::text('title_en',$SaleItem['title_en'], array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
        <?} else{?>
            {{ Form::text('title_en',null, array('class'=>'form-control','placeholder'=>'სათაური / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>მოკლე ტექსტი / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['short_text_en'])) { ?>
            {{ Form::text('short_text_en',$SaleItem['short_text_en'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ინგლისური')) }}
        <?} else{?>
            {{ Form::text('short_text_en',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / ინგლისური</label>
    <? if(isset($SaleItem['full_text_en'])) { ?>
        {{ Form::textarea('full_text_en',$SaleItem['full_text_en'], array('class'=>'form-control ckreplaceclass', 'id'=>'ck-en')) }}
    <?} else{?>
        {{ Form::textarea('full_text_en',null, array('class'=>'form-control ckreplaceclass', 'id'=>'ck-en')) }}
    <?}?>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>აღწერა / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['description_en'])) { ?>
            {{ Form::text('description_en',$SaleItem['description_en'], array('class'=>'form-control','placeholder'=>'აღწერა / ინგლისური')) }}
        <?} else{?>
            {{ Form::text('description_en',null, array('class'=>'form-control','placeholder'=>'აღწერა / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>საკვანძო სიტყვები / ინგლისური</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['keywords_en'])) { ?>
            {{ Form::text('keywords_en',$SaleItem['keywords_en'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ინგლისური')) }}
        <?} else{?>
            {{ Form::text('keywords_en',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ინგლისური')) }}
        <?}?>
    </div>
</div>
<p></p>