<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Events;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class EventsModule extends Model
{
    protected $table = "Events";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*ჩანაწერების წაკითხვა ID-ს მიხედვით*/
    public function GetEvents($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function EventsById($events_id){
        return $this->where('id', $events_id)->first();
    }

    //ბოლო ჩანაწერები მთავარი გვერდისთვის
    public function LastEvents(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ჩანაწერების დამატება ბაზაში*/
    public function SaveEvents($EventsItems_forms,$UpImage){

        $events = new EventsModule;

        $events->menu_id        =    $EventsItems_forms['menu_id'];

        $events->image          =    "files/events/".$UpImage;
        $events->tumb           =    "files/events/tumb/".$UpImage;
        $events->date           =    $EventsItems_forms['date'];
        $events->main           =    $EventsItems_forms['main'];

        $events->title_ge       =    $EventsItems_forms['title_ge'];
        $events->title_en       =    $EventsItems_forms['title_en'];
        $events->title_ru       =    $EventsItems_forms['title_ru'];

        $events->short_text_ge  =    $EventsItems_forms['short_text_ge'];
        $events->short_text_en  =    $EventsItems_forms['short_text_en'];
        $events->short_text_ru  =    $EventsItems_forms['short_text_ru'];

        $events->full_text_ge   =    $EventsItems_forms['full_text_ge'];
        $events->full_text_en   =    $EventsItems_forms['full_text_en'];
        $events->full_text_ru   =    $EventsItems_forms['full_text_ru'];

        $events->description_ge =    $EventsItems_forms['description_ge'];
        $events->description_en =    $EventsItems_forms['description_en'];
        $events->description_ru =    $EventsItems_forms['description_ru'];

        $events->keywords_ge    =    $EventsItems_forms['keywords_ge'];
        $events->keywords_en    =    $EventsItems_forms['keywords_en'];
        $events->keywords_ru    =    $EventsItems_forms['keywords_ru'];

        $events->save();
    }

    /*ჩანაწერების რედაქტირება ბაზაში*/
    public function UpdateEvents($EventsItems_forms,$UpImage){

        $events = $this->find($EventsItems_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $events->image          =    "files/events/".$UpImage;
            $events->tumb           =     "files/events/tumb/".$UpImage;
        }

        $events->menu_id        =    $EventsItems_forms['menu_id'];
        $events->date           =    $EventsItems_forms['date'];
        $events->main           =    $EventsItems_forms['main'];

        $events->title_ge       =    $EventsItems_forms['title_ge'];
        $events->title_en       =    $EventsItems_forms['title_en'];
        $events->title_ru       =    $EventsItems_forms['title_ru'];

        $events->short_text_ge  =    $EventsItems_forms['short_text_ge'];
        $events->short_text_en  =    $EventsItems_forms['short_text_en'];
        $events->short_text_ru  =    $EventsItems_forms['short_text_ru'];

        $events->full_text_ge   =    $EventsItems_forms['full_text_ge'];
        $events->full_text_en   =    $EventsItems_forms['full_text_en'];
        $events->full_text_ru   =    $EventsItems_forms['full_text_ru'];

        $events->description_ge =    $EventsItems_forms['description_ge'];
        $events->description_en =    $EventsItems_forms['description_en'];
        $events->description_ru =    $EventsItems_forms['description_ru'];

        $events->keywords_ge    =    $EventsItems_forms['keywords_ge'];
        $events->keywords_en    =    $EventsItems_forms['keywords_en'];
        $events->keywords_ru    =    $EventsItems_forms['keywords_ru'];

        $events->save();
    }


    /*ჩანაწერების წაშლა ბაზიდან*/
    public function Delete_events($events_id){
        $events_item = $this->find($events_id);
        $events_item->delete();
        return  array('image'=>$events_item->image, 'tumb'=>$events_item->tumb, 'menu_id'=>$events_item->menu_id);
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
