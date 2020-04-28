<?php

namespace App\Models\App\BackModels\Blog;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class BlogExtends extends Model
{
    protected $table = "BlogCategory";
    protected $filable = array();

    public function UpdateBlog($RequestData){

        $BlogData = $this->find($RequestData->menu_id);


        $BlogData->controller          =    $RequestData['controller'];
        $BlogData->target              =    $RequestData['target'];

        $BlogData->title_ge            =    $RequestData['title_ge'];
        $BlogData->title_en            =    $RequestData['title_en'];
        $BlogData->title_ru            =    $RequestData['title_ru'];

        $BlogData->tab_ge              =    $RequestData['tab_ge'];
        $BlogData->tab_en              =    $RequestData['tab_en'];
        $BlogData->tab_ru              =    $RequestData['tab_ru'];

        $BlogData->description_ge      =    $RequestData['description_ge'];
        $BlogData->description_en      =    $RequestData['description_en'];
        $BlogData->description_ru      =    $RequestData['description_ru'];

        $BlogData->keywords_ge         =    $RequestData['keywords_ge'];
        $BlogData->keywords_en         =    $RequestData['keywords_en'];
        $BlogData->keywords_ru         =    $RequestData['keywords_ru'];

        $BlogData->save();
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
