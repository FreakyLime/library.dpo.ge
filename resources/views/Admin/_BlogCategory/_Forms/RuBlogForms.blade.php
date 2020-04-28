<div class="portlet-body form">

    <div class="form-body">
        <div class="form-group col-md-6 col-sm-6">
            <label>სათაური / რუსული</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="title_ru" type="text" class="form-control" placeholder="სათაური / რუსული" value="{{ $Blog['title_ru'] }}">
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label>მოკლე ტექსტი / რუსული</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="tab_ru" type="text" class="form-control"  placeholder="ფანჯარის სახელი / რუსული" value="{{ $Blog['tab_ru'] }}">
            </div>
        </div>

        <div class="form-group col-md-12 col-sm-12">
            <label>აღწერა / რუსული</label>
            <textarea name="description_ru" class="form-control" rows="3">{{ $Blog["description_ru"] }}</textarea>
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label>საკვანძო სიტყვები / რუსული</label>
            <textarea name="keywords_ru" class="form-control" rows="3">{{ $Blog["keywords_ru"] }}</textarea>
        </div>

    </div>
</div>