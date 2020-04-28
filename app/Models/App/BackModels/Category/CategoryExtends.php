<?php

namespace App\Models\App\BackModels\Category;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class CategoryExtends extends Model
{
    protected $table = "Category";
    protected $filable = array();

    public function UpdateCategory($RequestData){

        $CategoryData = $this->find($RequestData->menu_id);


        $CategoryData->controller          =    $RequestData['controller'];
        $CategoryData->target              =    $RequestData['target'];

        $CategoryData->title_ge            =    $RequestData['title_ge'];
        $CategoryData->title_en            =    $RequestData['title_en'];
        $CategoryData->title_ru            =    $RequestData['title_ru'];

        $CategoryData->tab_ge              =    $RequestData['tab_ge'];
        $CategoryData->tab_en              =    $RequestData['tab_en'];
        $CategoryData->tab_ru              =    $RequestData['tab_ru'];

        $CategoryData->description_ge      =    $RequestData['description_ge'];
        $CategoryData->description_en      =    $RequestData['description_en'];
        $CategoryData->description_ru      =    $RequestData['description_ru'];

        $CategoryData->keywords_ge         =    $RequestData['keywords_ge'];
        $CategoryData->keywords_en         =    $RequestData['keywords_en'];
        $CategoryData->keywords_ru         =    $RequestData['keywords_ru'];

        $CategoryData->save();
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
