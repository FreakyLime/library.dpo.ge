<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MoreImages extends Model
{

    protected $table = "more_images";
    /*
    |--------------------------------------------------------------------------
    | Images Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სურათების წასაკითხათ
    |
    */

    // დამატებითი სურათები ID-ის მიხედვით
    public function GetMoreImages($model_id,$model){

        return $this->Desc('id')->ModeliD($model_id)->Model($model)->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Images Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები სურათებისთვის
    |
    */

    // სადაც მოდელი უდრის მიმდინარე მოდელის ID-ს
    public function scopeModeliD($query,$menu_id){

        $query->where(['model_id'=> $menu_id]);
    }
    // სადაც მოდელი უდრის მიმდინარე მოდელს
    public function scopeModel($query,$model){

        $query->where(['model'=> $model]);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeDesc($query,$field){

        $query->orderBy($field, 'desc');
    }
}
