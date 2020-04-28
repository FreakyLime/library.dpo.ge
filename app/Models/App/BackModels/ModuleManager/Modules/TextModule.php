<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class TextModule extends Model
{
    protected $table = "text";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სიახლის წაკითხვა ID-ს მიხედვით*/
    public function GetPageText($menu_id){

        return $this->where('menu_id',$menu_id)->first();
    }


    /*სიახლის დამატება ბაზაში*/
    public function SaveText($TextData){

        $Text = new TextModule;

        $Text->menu_id        =    $TextData['menu_id'];

        $Text->full_text_ge   =    trim($TextData['full_text_ge']);
        $Text->full_text_en   =    trim($TextData['full_text_en']);
        $Text->full_text_ru   =    trim($TextData['full_text_ru']);

        $Text->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateText($TextData){

        $Text = $this->where('menu_id', '=', $TextData['menu_id'])->first();

        $Text->full_text_ge   =    $TextData['full_text_ge'];
        $Text->full_text_en   =    $TextData['full_text_en'];
        $Text->full_text_ru   =    $TextData['full_text_ru'];

        $Text->save();
    }



    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები
    |
    */



}
