<?php

namespace App\Models\App\BackModels\Navigation;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use Menu\Menu;

class AdminNavigation extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'AdminNavigation';


    function childs()
    {
        return $this->hasMany('App\Models\Admin\Navigation\AdminNavigation','root_id', 'id');
    }


}
