<!-- მასივის მაგალითი - settings[id][field] -->
<div class="form-body">

    <div class="form-group col-md-6 col-sm-12">
        <label>ვეგ-გვერდის მისამართი</label>
        <div class="input-group">
        <span class="input-group-addon"> <i class="fa fa-globe"></i> </span>
            <input name="settings[{{ $Settings['website']['id'] }}][url]"
                   type="text" class="form-control"
                   placeholder="ვეგ-გვერდის მისამართი"
                   value="{{ $Settings['website']['url'] }}">
            <input type="hidden" name="settings[{{ $Settings['website']['id'] }}][keyword]" value="{{ $Settings['website']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ვეგ-გვერდის სათაური</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-paragraph"></i> </span>
            <input name="settings[{{ $Settings['website_title']['id'] }}][title_ge]"
                   type="text" class="form-control"
                   placeholder="ვეგ-გვერდის სათაური"
                   value="{{ $Settings['website_title']['title_ge'] }}">
            <input type="hidden" name="settings[{{ $Settings['website_title']['id'] }}][keyword]" value="{{ $Settings['website_title']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>მისამართი</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-map-marker"></i> </span>
            <input name="settings[{{ $Settings['address']['id'] }}][title_ge]"
                   type="text" class="form-control"
                   placeholder="მისამართი"
                   value="{{ $Settings['address']['title_ge'] }}">
            <input type="hidden" name="settings[{{ $Settings['address']['id'] }}][keyword]" value="{{ $Settings['address']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ელ-ფოსტა</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
            <input name="settings[{{ $Settings['email']['id'] }}][info]"
                   type="text" class="form-control"
                   placeholder="ელ-ფოსტა"
                   value="{{ $Settings['email']['info'] }}">
            <input type="hidden" name="settings[{{ $Settings['email']['id'] }}][keyword]" value="{{ $Settings['email']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ტელეფონის ნომერი</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-phone-square"></i> </span>
            <input name="settings[{{ $Settings['phone']['id'] }}][info]"
                   type="text" class="form-control"
                   placeholder="ტელეფონის ნომერი"
                   value="{{ $Settings['phone']['info'] }}">
            <input type="hidden" name="settings[{{ $Settings['phone']['id'] }}][keyword]" value="{{ $Settings['phone']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>მობილურის ნომერი</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-mobile"></i> </span>
            <input name="settings[{{ $Settings['mobile']['id'] }}][info]"
                   type="text" class="form-control"
                   placeholder="მობილურის ნომერი"
                   value="{{ $Settings['mobile']['info'] }}">
            <input type="hidden" name="settings[{{ $Settings['mobile']['id'] }}][keyword]" value="{{ $Settings['mobile']['keyword'] }}">
        </div>
    </div>

    <div style="height: 50px; clear: both;"></div>

    <div class="form-group col-md-4 col-sm-12">
        <label>Facebook</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-facebook-official"></i> </span>
            <input name="settings[{{ $Settings['facebook']['id'] }}][url]"
                   type="text" class="form-control"
                   placeholder="Facebook"
                   value="{{ $Settings['facebook']['url'] }}">
            <input type="hidden" name="settings[{{ $Settings['facebook']['id'] }}][keyword]" value="{{ $Settings['facebook']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-4 col-sm-12">
        <label>Twitter</label>
        <div class="input-group">
            <span class="input-group-addon blue"> <i class="fa fa-twitter-square"></i> </span>
            <input name="settings[{{ $Settings['twitter']['id'] }}][url]"
                   type="text" class="form-control"
                   placeholder="Twitter"
                   value="{{ $Settings['twitter']['url'] }}">
            <input type="hidden" name="settings[{{ $Settings['twitter']['id'] }}][keyword]" value="{{ $Settings['twitter']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-4 col-sm-12">
        <label>Youtube</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-youtube-square"></i> </span>
            <input name="settings[{{ $Settings['youtube']['id'] }}][url]"
                   type="text" class="form-control"
                   placeholder="Youtube"
                   value="{{ $Settings['youtube']['url'] }}">
            <input type="hidden" name="settings[{{ $Settings['youtube']['id'] }}][keyword]" value="{{ $Settings['youtube']['keyword'] }}">
        </div>
    </div>


    <div class="form-group col-md-12 col-sm-12">
        <label>Google რუკა</label>
        <textarea name="settings[{{ $Settings['map']['id'] }}][embed_map]" class="form-control" rows="3">{{ $Settings['map']['embed_map'] }}</textarea>
        <input type="hidden" name="settings[{{ $Settings['map']['id'] }}][keyword]" value="{{ $Settings['map']['keyword'] }}">
    </div>


</div>
