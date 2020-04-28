<div class="portlet-body form">

    <div class="form-body">
        <div class="form-group col-md-6 col-sm-6">
            <label>სათაური / ქართული</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="title_ge" type="text" class="form-control" placeholder="სათაური / ქართული" value="{{ $Menu['title_ge'] }}">
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label>მოკლე ტექსტი / ქართული</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="tab_ge" type="text" class="form-control"  placeholder="ფანჯარის სახელი / ქართული" value="{{ $Menu['tab_ge'] }}">
            </div>
        </div>
        <p>
        </p>
        <div class="form-group col-md-6 col-sm-6">
            <label>ლინკი (შიავსეთ მხოლოდ ინდივიდუალურ შემთხვევაში)</label>
            <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
                <input name="controller" type="text" class="form-control" placeholder="ლინკი (შიავსეთ მხოლოდ ინდივიდუალურ შემთხვევაში)" value="{{ $Menu['controller'] }}">
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label>ლინკის გახსნის მეთოდი</label>
            <select class="form-control" name="target">
                <option value="_self" <?php if($Menu["target"] == '_self')  echo ' selected="selected"'?>>გაიხსნას არსებულ ფანჯარაში</option>
                <option value="_blank" <?php if($Menu["target"] == '_blank')  echo ' selected="selected"'?>>გაიხსნას ახალ ფანჯარაში</option>
            </select>
        </div>

        <div class="form-group col-md-12 col-sm-12">
            <label>აღწერა / ქართული</label>
            <textarea name="description_ge" class="form-control" rows="3">{{ $Menu["description_ge"] }}</textarea>
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label>საკვანძო სიტყვები / ქართული</label>
            <textarea name="keywords_ge" class="form-control" rows="3">{{ $Menu["keywords_ge"] }}</textarea>
        </div>

    </div>
</div>