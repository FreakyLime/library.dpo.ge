<!-- მასივის მაგალითი - settings[id][field] -->
<div class="form-body">

    <div class="form-group col-md-6 col-sm-12">
        <label>ვეგ-გვერდის სათაური</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
            <input name="settings[{{ $Settings['website_title']['id'] }}][title_en]"
                   type="text" class="form-control"
                   placeholder="ვეგ-გვერდის სათაური"
                   value="{{ $Settings['website_title']['title_en'] }}">
            <input type="hidden" name="settings[{{ $Settings['website_title']['id'] }}][keyword]" value="{{ $Settings['website_title']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>მისამართი</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
            <input name="settings[{{ $Settings['address']['id'] }}][title_en]"
                   type="text" class="form-control"
                   placeholder="მისამართი"
                   value="{{ $Settings['address']['title_en'] }}">
            <input type="hidden" name="settings[{{ $Settings['address']['id'] }}][keyword]" value="{{ $Settings['address']['keyword'] }}">
        </div>
    </div>

</div>
