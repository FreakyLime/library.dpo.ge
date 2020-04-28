<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AdviceModule extends Model
{
    protected $table = "Advice";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*რჩევის წაკითხვა ID-ს მიხედვით*/
    public function GetAdvice($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function AdviceById($advice_id){
        return $this->where('id', $advice_id)->first();
    }

    //ბოლო რჩევები მთავარი გვერდისთვის
    public function LastAdvice(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*რჩევის დამატება ბაზაში*/
    public function SaveAdvice($Advice_forms,$UpImage){

        $advice = new AdviceModule;

        $advice->menu_id        =    $Advice_forms['menu_id'];

        $advice->image          =    "files/advice/".$UpImage;
        $advice->tumb           =    "files/advice/tumb/".$UpImage;
        $advice->date           =    Carbon::now()->toDayDateTimeString();
        $advice->main           =    $Advice_forms['main'];

        $advice->title_ge       =    $Advice_forms['title_ge'];
        $advice->title_en       =    $Advice_forms['title_en'];
        $advice->title_ru       =    $Advice_forms['title_ru'];

        $advice->short_text_ge  =    $Advice_forms['short_text_ge'];
        $advice->short_text_en  =    $Advice_forms['short_text_en'];
        $advice->short_text_ru  =    $Advice_forms['short_text_ru'];

        $advice->full_text_ge   =    $Advice_forms['full_text_ge'];
        $advice->full_text_en   =    $Advice_forms['full_text_en'];
        $advice->full_text_ru   =    $Advice_forms['full_text_ru'];

        $advice->description_ge =    $Advice_forms['description_ge'];
        $advice->description_en =    $Advice_forms['description_en'];
        $advice->description_ru =    $Advice_forms['description_ru'];

        $advice->keywords_ge    =    $Advice_forms['keywords_ge'];
        $advice->keywords_en    =    $Advice_forms['keywords_en'];
        $advice->keywords_ru    =    $Advice_forms['keywords_ru'];

        $advice->save();
    }

    /*რჩევის რედაქტირება ბაზაში*/
    public function UpdateAdvice($Advice_forms,$UpImage){

        $advice = $this->find($Advice_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $advice->image          =    "files/advice/".$UpImage;
            $advice->tumb           =     "files/advice/tumb/".$UpImage;
        }

        $advice->menu_id        =    $Advice_forms['menu_id'];
        $advice->date           =    Carbon::now()->toDayDateTimeString();
        $advice->main           =    $Advice_forms['main'];

        $advice->title_ge       =    $Advice_forms['title_ge'];
        $advice->title_en       =    $Advice_forms['title_en'];
        $advice->title_ru       =    $Advice_forms['title_ru'];

        $advice->short_text_ge  =    $Advice_forms['short_text_ge'];
        $advice->short_text_en  =    $Advice_forms['short_text_en'];
        $advice->short_text_ru  =    $Advice_forms['short_text_ru'];

        $advice->full_text_ge   =    $Advice_forms['full_text_ge'];
        $advice->full_text_en   =    $Advice_forms['full_text_en'];
        $advice->full_text_ru   =    $Advice_forms['full_text_ru'];

        $advice->description_ge =    $Advice_forms['description_ge'];
        $advice->description_en =    $Advice_forms['description_en'];
        $advice->description_ru =    $Advice_forms['description_ru'];

        $advice->keywords_ge    =    $Advice_forms['keywords_ge'];
        $advice->keywords_en    =    $Advice_forms['keywords_en'];
        $advice->keywords_ru    =    $Advice_forms['keywords_ru'];

        $advice->save();
    }


    /*რჩევის წაშლა ბაზიდან*/
    public function Delete_advice($advice_id){
        $advice_item = $this->find($advice_id);
        $advice_item->delete();
        return  array('image'=>$advice_item->image, 'tumb'=>$advice_item->tumb, 'menu_id'=>$advice_item->menu_id);
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
