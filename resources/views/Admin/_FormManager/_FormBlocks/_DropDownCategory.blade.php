<?php $TableItem = isset($TableItem) ? $TableItem : ["category" => false]; ?>
<div class="form-group col-md-6 col-sm-6">
    <label>{{ $ModuleForm["placeholder"] }}</label>
    <select class="form-control" name="category">
        <option value="category_1" <?php if (isset($TableItem['category']) && $TableItem["category"] == 1)  echo ' selected="selected"' ?>>კატეგორია 1</option>
        <option value="category_2" <?php if (isset($TableItem['category']) && $TableItem["category"] == 2)  echo ' selected="selected"' ?>>კატეგორია 2</option>
    </select>
</div>