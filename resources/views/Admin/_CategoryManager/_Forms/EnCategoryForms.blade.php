<div class="portlet-body form">

    <div class="form-body">
        <div class="form-group col-md-6 col-sm-6">
            <label>სათაური / ინგლისური</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="title_en" type="text" class="form-control" placeholder="სათაური / ინგლისური" value="{{ $Category['title_en'] }}">
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label>მოკლე ტექსტი / ინგლისური</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="tab_en" type="text" class="form-control"  placeholder="ფანჯარის სახელი / ინგლისური" value="{{ $Category['tab_en'] }}">
            </div>
        </div>

        <div class="form-group col-md-12 col-sm-12">
            <label>აღწერა / ინგლისური</label>
            <textarea name="description_en" class="form-control" rows="3">{{ $Category["description_en"] }}</textarea>
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label>საკვანძო სიტყვები / ინგლისური</label>
            <textarea name="keywords_en" class="form-control" rows="3">{{ $Category["keywords_en"] }}</textarea>
        </div>

    </div>
</div>