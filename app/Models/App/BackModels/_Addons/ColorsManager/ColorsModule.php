<?php

namespace App\Models\App\BackModels\_Addons\ColorsManager;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ColorsModule extends Model
{
    protected $table = "Colors";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*ფერის წაკითხვა ID-ს მიხედვით*/
    public function GetColors($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function ColorById($color_item_id){
        return $this->where('id', $color_item_id)->first();
    }

    //ბოლო ფერები მთავარი გვერდისთვის
    public function LastColors(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ფერის დამატება ბაზაში*/
    public function SaveColor($color_post,$UpImage){

        $color = new ColorsModule;

        $color->menu_id         =    $color_post['menu_id'];

        $color->price         =    $color_post['price'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($color_post['sale_price']){
            $color->sale_price  =    $color_post['sale_price'];
            $color->sale        =    1;
        }
        if($color_post['type'] ==1){
            $color->type = "interior";
        }
        if($color_post['type'] ==2){
            $color->type = "exterior";
        }

        $color->image           =    "files/colors/".$UpImage;
        $color->tumb            =    "files/colors/tumb/".$UpImage;
        $color->date            =    Carbon::now()->toDayDateTimeString();
        $color->main            =    $color_post['main'];

        $color->title_ge        =    $color_post['title_ge'];
        $color->title_en        =    $color_post['title_en'];
        $color->title_ru        =    $color_post['title_ru'];

        $color->short_text_ge   =    $color_post['short_text_ge'];
        $color->short_text_en   =    $color_post['short_text_en'];
        $color->short_text_ru   =    $color_post['short_text_ru'];

        $color->full_text_ge    =    $color_post['full_text_ge'];
        $color->full_text_en    =    $color_post['full_text_en'];
        $color->full_text_ru    =    $color_post['full_text_ru'];

        $color->description_ge  =    $color_post['description_ge'];
        $color->description_en  =    $color_post['description_en'];
        $color->description_ru  =    $color_post['description_ru'];

        $color->keywords_ge     =    $color_post['keywords_ge'];
        $color->keywords_en     =    $color_post['keywords_en'];
        $color->keywords_ru     =    $color_post['keywords_ru'];

        $color->save();
    }

    /*ფერის რედაქტირება ბაზაში*/
    public function UpdateColor($color_post,$UpImage){

        $color = $this->find($color_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $color->image          =    "files/colors/".$UpImage;
            $color->tumb           =    "files/colors/tumb/".$UpImage;
        }

        $color->menu_id        =    $color_post['menu_id'];

        $color->price         =    $color_post['price'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($color_post['sale_price']){
            $color->sale_price  =    $color_post['sale_price'];
            $color->sale        =    1;
        }
        if($color_post['type'] ==1){
            $color->type = "interior";
        }
        if($color_post['type'] ==2){
            $color->type = "exterior";
        }

        $color->date           =    Carbon::now()->toDayDateTimeString();
        $color->main           =    $color_post['main'];

        $color->title_ge       =    $color_post['title_ge'];
        $color->title_en       =    $color_post['title_en'];
        $color->title_ru       =    $color_post['title_ru'];

        $color->short_text_ge  =    $color_post['short_text_ge'];
        $color->short_text_en  =    $color_post['short_text_en'];
        $color->short_text_ru  =    $color_post['short_text_ru'];

        $color->full_text_ge   =    $color_post['full_text_ge'];
        $color->full_text_en   =    $color_post['full_text_en'];
        $color->full_text_ru   =    $color_post['full_text_ru'];

        $color->description_ge =    $color_post['description_ge'];
        $color->description_en =    $color_post['description_en'];
        $color->description_ru =    $color_post['description_ru'];

        $color->keywords_ge    =    $color_post['keywords_ge'];
        $color->keywords_en    =    $color_post['keywords_en'];
        $color->keywords_ru    =    $color_post['keywords_ru'];

        $color->save();
    }


    /*ფერის წაშლა ბაზიდან*/
    public function DeleteColor($color_id){
        $color_item = $this->find($color_id);
        $color_item->delete();
        return  array('image'=>$color_item->image, 'tumb'=>$color_item->tumb, 'menu_id'=>$color_item->menu_id);
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
