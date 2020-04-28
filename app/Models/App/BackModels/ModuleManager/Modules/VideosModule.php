<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class VideosModule extends Model
{
    protected $table = "Videos";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*ვიდეოს წაკითხვა ID-ს მიხედვით*/
    public function GetVideos($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function VideosById($videos_id){
        return $this->where('id', $videos_id)->first();
    }

    //ბოლო ვიდეოები მთავარი გვერდისთვის
    public function LastVideos(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ვიდეოს დამატება ბაზაში*/
    public function SaveVideos($Videos_forms,$UpImage){

        $videos = new VideosModule;

        $videos->menu_id        =    $Videos_forms['menu_id'];
        $videos->image          =    "files/videos/".$UpImage;
        $videos->tumb           =     "files/videos/tumb/".$UpImage;
        $videos->date           =    Carbon::now()->toDayDateTimeString();
        $videos->main           =    $Videos_forms['main'];

        $videos->video_url      =    $Videos_forms['video_url'];

        $videos->title_ge       =    $Videos_forms['title_ge'];
        $videos->title_en       =    $Videos_forms['title_en'];
        $videos->title_ru       =    $Videos_forms['title_ru'];

        $videos->short_text_ge  =    $Videos_forms['short_text_ge'];
        $videos->short_text_en  =    $Videos_forms['short_text_en'];
        $videos->short_text_ru  =    $Videos_forms['short_text_ru'];

        $videos->full_text_ge   =    $Videos_forms['full_text_ge'];
        $videos->full_text_en   =    $Videos_forms['full_text_en'];
        $videos->full_text_ru   =    $Videos_forms['full_text_ru'];

        $videos->description_ge =    $Videos_forms['description_ge'];
        $videos->description_en =    $Videos_forms['description_en'];
        $videos->description_ru =    $Videos_forms['description_ru'];

        $videos->keywords_ge    =    $Videos_forms['keywords_ge'];
        $videos->keywords_en    =    $Videos_forms['keywords_en'];
        $videos->keywords_ru    =    $Videos_forms['keywords_ru'];

        $videos->save();
    }

    /*ვიდეოს რედაქტირება ბაზაში*/
    public function UpdateVideos($Videos_forms,$UpImage){

        $videos = $this->find($Videos_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $videos->image          =    "files/videos/".$UpImage;
            $videos->tumb           =     "files/videos/tumb/".$UpImage;
        }

        $videos->menu_id        =    $Videos_forms['menu_id'];
        $videos->date           =    Carbon::now()->toDayDateTimeString();
        $videos->main           =    $Videos_forms['main'];

        $videos->video_url      =    $Videos_forms['video_url'];

        $videos->title_ge       =    $Videos_forms['title_ge'];
        $videos->title_en       =    $Videos_forms['title_en'];
        $videos->title_ru       =    $Videos_forms['title_ru'];

        $videos->short_text_ge  =    $Videos_forms['short_text_ge'];
        $videos->short_text_en  =    $Videos_forms['short_text_en'];
        $videos->short_text_ru  =    $Videos_forms['short_text_ru'];

        $videos->full_text_ge   =    $Videos_forms['full_text_ge'];
        $videos->full_text_en   =    $Videos_forms['full_text_en'];
        $videos->full_text_ru   =    $Videos_forms['full_text_ru'];

        $videos->description_ge =    $Videos_forms['description_ge'];
        $videos->description_en =    $Videos_forms['description_en'];
        $videos->description_ru =    $Videos_forms['description_ru'];

        $videos->keywords_ge    =    $Videos_forms['keywords_ge'];
        $videos->keywords_en    =    $Videos_forms['keywords_en'];
        $videos->keywords_ru    =    $Videos_forms['keywords_ru'];

        $videos->save();
    }


    /*ვიდეოს წაშლა ბაზიდან*/
    public function Delete_videos($videos_id){
        $videos_item = $this->find($videos_id);
        $videos_item->delete();
        return  array('image'=>$videos_item->image, 'tumb'=>$videos_item->tumb, 'menu_id'=>$videos_item->menu_id);
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
