<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Text extends Model
{

    protected $table = "text";
    /*
    |--------------------------------------------------------------------------
    | TEXT Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები ტექსტის წასაკითხათ
    |
    */
    
    // ტექსტი მთავარი გვერდისთვის
    public function GetMainText(){

        return $this->Desc('id')->Main()->take('6')->get();
    }
    // ტექსტი ID-ის მიხედვით
    public function GetPageText($menu_id){

        return $this->MenuiD($menu_id)->first();
    }
    
    
    /*
    |--------------------------------------------------------------------------
    | Text Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები ტექსტისთვის
    |
    */

    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeMenuiD($query,$menu_id){

        $query->where(['menu_id'=> $menu_id]);
    }

}
