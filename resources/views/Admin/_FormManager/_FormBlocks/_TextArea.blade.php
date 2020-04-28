<div class="form-group col-md-12 col-sm-12">
    <label>{{ $ModuleForm["placeholder"] }}</label>
    <textarea name="{{ $ModuleForm["title"] }}" class="form-control ckreplaceclass" id="{{$ModuleForm["id_name"] }}" rows="3"><?
            if(old($ModuleForm['title'])) echo old($ModuleForm['title']);
            elseif(isset($TableItem[$ModuleForm["title"]])) echo trim($TableItem[$ModuleForm["title"]]);
    ?></textarea>
</div>