<div class="form-group col-md-6 col-sm-6">
    <label>{{ $ModuleForm["placeholder"] }}</label>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
        </span>
        <input name="{{ $ModuleForm["title"] }}"
               type="text" class="form-control"
               placeholder="{{ $ModuleForm["placeholder"] }}"
               value="<?
                    if(old($ModuleForm['title'])) echo old($ModuleForm['title']);
                    elseif(isset($TableItem[$ModuleForm["title"]])) echo $TableItem[$ModuleForm["title"]];
               ?>">
    </div>
</div>