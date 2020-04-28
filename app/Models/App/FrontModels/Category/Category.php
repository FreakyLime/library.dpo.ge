<?php

namespace App\Models\App\FrontModels\Category;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Category extends Model {
    protected $table = 'Category';

    public function submenu() {
        return $this->hasMany(Category::class, 'root_id', 'id')->where('status','1')->orderBy('pos');
    }
}
