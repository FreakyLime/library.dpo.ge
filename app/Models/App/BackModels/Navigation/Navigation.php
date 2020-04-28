<?php

namespace App\Models\App\BackModels\Navigation;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class Navigation extends Model
{
    protected $table = "navigation";
    protected $filable = array();

    public function UpdateMenu($RequestData){

        $MenuData = $this->find($RequestData->menu_id);


        $MenuData->controller          =    $RequestData['controller'];
        $MenuData->target              =    $RequestData['target'];

        $MenuData->title_ge            =    $RequestData['title_ge'];
        $MenuData->title_en            =    $RequestData['title_en'];
        $MenuData->title_ru            =    $RequestData['title_ru'];

        $MenuData->tab_ge              =    $RequestData['tab_ge'];
        $MenuData->tab_en              =    $RequestData['tab_en'];
        $MenuData->tab_ru              =    $RequestData['tab_ru'];

        $MenuData->description_ge      =    $RequestData['description_ge'];
        $MenuData->description_en      =    $RequestData['description_en'];
        $MenuData->description_ru      =    $RequestData['description_ru'];

        $MenuData->keywords_ge         =    $RequestData['keywords_ge'];
        $MenuData->keywords_en         =    $RequestData['keywords_en'];
        $MenuData->keywords_ru         =    $RequestData['keywords_ru'];

        $MenuData->save();
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
