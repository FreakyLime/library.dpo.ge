<div class="form-group col-md-6 col-sm-6">
    <label>{{ $ModuleForm["placeholder"] }}</label>
    <select class="form-control" name="target">
        <option value="_self" <? if(isset($TableItem["target"]) == 1)  echo ' selected="selected"'?>>გაიხსნას არსებულ ფანჯარაში</option>
        <option value="_blank" <? if(isset($TableItem["target"]) == 0)  echo ' selected="selected"'?>>გაიხსნას ახალ ფანჯარაში</option>
    </select>
</div>