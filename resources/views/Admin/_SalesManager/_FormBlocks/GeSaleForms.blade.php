<p></p>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>ფასდაკლების ფასი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['price'])) { ?>
            {{ Form::text('price',$SaleItem['price'], array('class'=>'form-control','placeholder'=>'ფასდაკლების ფასი')) }}
        <?} else{?>
            {{ Form::text('price',null, array('class'=>'form-control','placeholder'=>'ფასდაკლების ფასი')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>ფასდაკლების ახალი ფასი</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['sale_price'])) { ?>
            {{ Form::text('sale_price',$SaleItem['sale_price'], array('class'=>'form-control','placeholder'=>'ფასდაკლების ახალი ფასი')) }}
        <?} else{?>
            {{ Form::text('sale_price',null, array('class'=>'form-control','placeholder'=>'ფასდაკლების ახალი ფასი')) }}
        <?}?>
    </div>
</div>
<div class="form-group col-md-6 col-sm-6">
    <label>სათაური / ქართული</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-check"></i>
        </span>
        <? if(isset($SaleItem['title_ge'])) { ?>
            {{ Form::text('title_ge',$SaleItem['title_ge'], array('class'=>'form-control','placeholder'=>'სათაური / ქართული')) }}
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
        <? if(isset($SaleItem['short_text_ge'])) { ?>
            {{ Form::text('short_text_ge',$SaleItem['short_text_ge'], array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?} else{?>
            {{ Form::text('short_text_ge',null, array('class'=>'form-control','placeholder'=>'მოკლე ტექსტი / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-12 col-sm-12">
    <label>სრული ტექსტი / ქართული</label>
    <? if(isset($SaleItem['full_text_ge'])) { ?>
        {{ Form::textarea('full_text_ge',$SaleItem['full_text_ge'], array('class'=>'form-control ckreplaceclass', 'id'=>'ck-ge')) }}
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
        <? if(isset($SaleItem['description_ge'])) { ?>
            {{ Form::text('description_ge',$SaleItem['description_ge'], array('class'=>'form-control','placeholder'=>'აღწერა / ქართული')) }}
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
        <? if(isset($SaleItem['keywords_ge'])) { ?>
            {{ Form::text('keywords_ge',$SaleItem['keywords_ge'], array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?} else{?>
            {{ Form::text('keywords_ge',null, array('class'=>'form-control','placeholder'=>'საკვანძო სიტყვები / ქართული')) }}
        <?}?>
    </div>
</div>
<p></p>
<div class="form-group col-md-6 col-sm-6">
    <label>პროდუქტის სურნელი</label>
    <select class="form-control" name="aromat">
        @foreach($Aromats as $item)
            <option value="{{ $item->id }}"  <? echo (isset($SaleItem["aromat"]) && $SaleItem["aromat"] == $item->id)  ? ' selected="selected"' :''?> >{{ $item->title_ge }}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-md-6 col-sm-6">
    <label>მნიშვნელოვანი ფასდაკლება</label>
    <select class="form-control" name="main">
        <option value="1" <? if(isset($SaleItem["main"]) == 1)  echo ' selected="selected"'?>>მნიშვნელოვანი ფასდაკლება</option>
        <option value="0" <? if(isset($SaleItem["main"]) == 0)  echo ' selected="selected"'?>>ჩვეულებრივი ფასდაკლება</option>
    </select>
</div>
<p></p>