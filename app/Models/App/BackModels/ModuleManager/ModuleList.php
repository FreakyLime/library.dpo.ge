<?php

namespace App\Models\App\BackModels\ModuleManager;

use Illuminate\Database\Eloquent\Model;

class ModuleList extends Model
{
    protected $table = "AModuleLists";
    /*
    |--------------------------------------------------------------------------
    | Cars Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    // მანქანის ძებნა ID-ის მიხედვით
    public function GetModules(){

        return $this->OrderBy('pos')->where('show',1)->get();
    }

    /*
    |--------------------------------------------------------------------------
    | Cars Scope Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები მანქანისთვის
    |
    */
    // Advanced ფილტრის Where ფილტრაცია

}
