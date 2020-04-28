<!-- მასივის მაგალითი - settings[id][field] -->
<div class="form-body">

    <div class="form-group col-md-6 col-sm-12">
        <label>ჩვენს შესახების სათაური</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-globe"></i> </span>
            <input name="settings[{{ $Settings['about_us_title']['id'] }}][title_ru]"
                   type="text" class="form-control"
                   placeholder="ჩვენს შესახების სათაური"
                   value="{{ $Settings['about_us_title']['title_ru'] }}">
            <input type="hidden" name="settings[{{ $Settings['about_us_title']['id'] }}][keyword]" value="{{ $Settings['about_us_title']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ჩვენს შესახების სამუშაო საათები</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-paragraph"></i> </span>
            <input name="settings[{{ $Settings['about_us_houres']['id'] }}][title_ru]"
                   type="text" class="form-control"
                   placeholder="ჩვენს შესახების სამუშაო საათები"
                   value="{{ $Settings['about_us_houres']['title_ru'] }}">
            <input type="hidden" name="settings[{{ $Settings['about_us_houres']['id'] }}][keyword]" value="{{ $Settings['about_us_houres']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ჩვენს შესახების ტელეფონის სათაური</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-map-marker"></i> </span>
            <input name="settings[{{ $Settings['about_us_cal_sat']['id'] }}][title_ru]"
                   type="text" class="form-control"
                   placeholder="ჩვენს შესახების ტელეფონის სათაური"
                   value="{{ $Settings['about_us_cal_sat']['title_ru'] }}">
            <input type="hidden" name="settings[{{ $Settings['about_us_cal_sat']['id'] }}][keyword]" value="{{ $Settings['about_us_cal_sat']['keyword'] }}">
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>ჩვენს შესახების ტელეფონის ნომერი</label>
        <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
            <input name="settings[{{ $Settings['about_us_call_number']['id'] }}][title_ru]"
                   type="text" class="form-control"
                   placeholder="ჩვენს შესახების ტელეფონის ნომერი"
                   value="{{ $Settings['about_us_call_number']['title_ru'] }}">
            <input type="hidden" name="settings[{{ $Settings['about_us_call_number']['id'] }}][keyword]" value="{{ $Settings['about_us_call_number']['keyword'] }}">
        </div>
    </div>



    <div style="height: 50px; clear: both;"></div>




    <div class="form-group col-md-12 col-sm-12">
        <label>ჩვენს შესახების სრული ტექსტი</label>
        <textarea name="settings[{{ $Settings['about_us_text']['id'] }}][full_text_ru]" class="form-control" rows="3" id="ck-ge">
            {{ $Settings['about_us_text']['full_text_ru'] }}
        </textarea>
        <input type="hidden" name="settings[{{ $Settings['about_us_text']['id'] }}][keyword]" value="{{ $Settings['about_us_text']['keyword'] }}">
    </div>


</div>
