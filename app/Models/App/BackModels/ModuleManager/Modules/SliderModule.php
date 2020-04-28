<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class SliderModule extends Model
{
    protected $table = "Slider";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სლაიდის წაკითხვა ID-ს მიხედვით*/
    public function GetSlider($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function SliderById($slider_id){
        return $this->where('id', $slider_id)->first();
    }

    //ბოლო სლაიდები მთავარი გვერდისთვის
    public function LastSlides(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*სლაიდის დამატება ბაზაში*/
    public function SaveSlider($Slider_forms,$UpImage){

        $slider = new SliderModule;

        $slider->menu_id        =    $Slider_forms['menu_id'];
        $slider->image          =    "files/slider/".$UpImage;
        $slider->tumb           =     "files/slider/tumb/".$UpImage;
        $slider->date           =    Carbon::now()->toDayDateTimeString();
        $slider->url            =    $Slider_forms['url'];
        $slider->target         =    $Slider_forms['target'];

        $slider->title_ge       =    $Slider_forms['title_ge'];
        $slider->title_en       =    $Slider_forms['title_en'];
        $slider->title_ru       =    $Slider_forms['title_ru'];

        $slider->short_text_ge  =    $Slider_forms['short_text_ge'];
        $slider->short_text_en  =    $Slider_forms['short_text_en'];
        $slider->short_text_ru  =    $Slider_forms['short_text_ru'];

        $slider->full_text_ge   =    $Slider_forms['full_text_ge'];
        $slider->full_text_en   =    $Slider_forms['full_text_en'];
        $slider->full_text_ru   =    $Slider_forms['full_text_ru'];

        $slider->description_ge =    $Slider_forms['description_ge'];
        $slider->description_en =    $Slider_forms['description_en'];
        $slider->description_ru =    $Slider_forms['description_ru'];

        $slider->keywords_ge    =    $Slider_forms['keywords_ge'];
        $slider->keywords_en    =    $Slider_forms['keywords_en'];
        $slider->keywords_ru    =    $Slider_forms['keywords_ru'];

        $slider->save();
    }

    /*სლაიდის რედაქტირება ბაზაში*/
    public function UpdateSlider($Slider_forms,$UpImage){

        $slider = $this->find($Slider_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $slider->image          =    "files/slider/".$UpImage;
            $slider->tumb           =     "files/slider/tumb/".$UpImage;
        }

        $slider->menu_id        =    $Slider_forms['menu_id'];
        $slider->date           =    Carbon::now()->toDayDateTimeString();
        $slider->url            =    $Slider_forms['url'];
        $slider->target         =    $Slider_forms['target'];

        $slider->title_ge       =    $Slider_forms['title_ge'];
        $slider->title_en       =    $Slider_forms['title_en'];
        $slider->title_ru       =    $Slider_forms['title_ru'];

        $slider->short_text_ge  =    $Slider_forms['short_text_ge'];
        $slider->short_text_en  =    $Slider_forms['short_text_en'];
        $slider->short_text_ru  =    $Slider_forms['short_text_ru'];

        $slider->full_text_ge   =    $Slider_forms['full_text_ge'];
        $slider->full_text_en   =    $Slider_forms['full_text_en'];
        $slider->full_text_ru   =    $Slider_forms['full_text_ru'];

        $slider->description_ge =    $Slider_forms['description_ge'];
        $slider->description_en =    $Slider_forms['description_en'];
        $slider->description_ru =    $Slider_forms['description_ru'];

        $slider->keywords_ge    =    $Slider_forms['keywords_ge'];
        $slider->keywords_en    =    $Slider_forms['keywords_en'];
        $slider->keywords_ru    =    $Slider_forms['keywords_ru'];

        $slider->save();
    }


    /*სლაიდის წაშლა ბაზიდან*/
    public function Delete_slider($slider_id){
        $slider_item = $this->find($slider_id);
        $slider_item->delete();
        return  array('image'=>$slider_item->image,'tumb'=>$slider_item->tumb, 'menu_id'=>$slider_item->menu_id);
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
