<div class="form-group col-md-6 col-sm-6">
    <label>{{ $ModuleForm["placeholder"] }}</label>
    <select class="form-control" name="main">
        <option value="1" <?php if(isset($TableItem["main"]) == 1)  echo ' selected="selected"'?>>მითითებულ მენიუში, მთავარ გვერდზე</option>
        <option value="0" <?php if(isset($TableItem["main"]) == 0)  echo ' selected="selected"'?>>მითითებულ მენიუში</option>
    </select>
</div>