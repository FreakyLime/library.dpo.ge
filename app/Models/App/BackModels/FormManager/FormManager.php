<?php

namespace App\Models\App\BackModels\FormManager;

use Illuminate\Database\Eloquent\Model;

class FormManager extends Model
{
    protected $table = "ABforms";
    /*
    |--------------------------------------------------------------------------
    | Forms Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    // ID-ის მიხედვით
    public function GetModuleForms($module,$lang){

        return $this->WhereModule($module)->WhereLang($lang)->orderBy('pos','asc')->get();
    }


    /*
    |--------------------------------------------------------------------------
    | Forms Scope Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები
    |
    */
    // Where ფილტრაცია
    public function scopeWhereModule($query,$module){

        $query->where('module', $module);
    }
    public function scopeWhereLang($query,$lang){

        $query->where('lang', $lang);
    }
}
