<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Teams;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class TeamsModule extends Model
{
    protected $table = "Teams";
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
    public function GetTeams($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function TeamsById($teams_id){
        return $this->where('id', $teams_id)->first();
    }

    //ბოლო ჩანაწერები მთავარი გვერდისთვის
    public function LastTeams(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ჩანაწერების დამატება ბაზაში*/
    public function SaveTeams($TeamsItems_forms,$UpImage){

        $teams = new TeamsModule;

        $teams->menu_id        =    $TeamsItems_forms['menu_id'];

        $teams->image          =    "files/teams/".$UpImage;
        $teams->tumb           =    "files/teams/tumb/".$UpImage;
        $teams->date           =    Carbon::now()->toDayDateTimeString();

        $teams->facebook       =    $TeamsItems_forms['facebook'];
        $teams->googleplus     =    $TeamsItems_forms['googleplus'];
        $teams->twitter        =    $TeamsItems_forms['twitter'];

        $teams->title_ge       =    $TeamsItems_forms['title_ge'];
        $teams->title_en       =    $TeamsItems_forms['title_en'];
        $teams->title_ru       =    $TeamsItems_forms['title_ru'];

        $teams->short_text_ge  =    $TeamsItems_forms['short_text_ge'];
        $teams->short_text_en  =    $TeamsItems_forms['short_text_en'];
        $teams->short_text_ru  =    $TeamsItems_forms['short_text_ru'];

        $teams->full_text_ge   =    $TeamsItems_forms['full_text_ge'];
        $teams->full_text_en   =    $TeamsItems_forms['full_text_en'];
        $teams->full_text_ru   =    $TeamsItems_forms['full_text_ru'];

        $teams->description_ge =    $TeamsItems_forms['description_ge'];
        $teams->description_en =    $TeamsItems_forms['description_en'];
        $teams->description_ru =    $TeamsItems_forms['description_ru'];

        $teams->keywords_ge    =    $TeamsItems_forms['keywords_ge'];
        $teams->keywords_en    =    $TeamsItems_forms['keywords_en'];
        $teams->keywords_ru    =    $TeamsItems_forms['keywords_ru'];

        $teams->save();
    }

    /*ჩანაწერების რედაქტირება ბაზაში*/
    public function UpdateTeams($TeamsItems_forms,$UpImage){

        $teams = $this->find($TeamsItems_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $teams->image          =    "files/teams/".$UpImage;
            $teams->tumb           =     "files/teams/tumb/".$UpImage;
        }

        $teams->menu_id        =    $TeamsItems_forms['menu_id'];
        $teams->date           =    Carbon::now()->toDayDateTimeString();

        $teams->title_ge       =    $TeamsItems_forms['title_ge'];
        $teams->title_en       =    $TeamsItems_forms['title_en'];
        $teams->title_ru       =    $TeamsItems_forms['title_ru'];

        $teams->facebook       =    $TeamsItems_forms['facebook'];
        $teams->googleplus     =    $TeamsItems_forms['googleplus'];
        $teams->twitter        =    $TeamsItems_forms['twitter'];

        $teams->short_text_ge  =    $TeamsItems_forms['short_text_ge'];
        $teams->short_text_en  =    $TeamsItems_forms['short_text_en'];
        $teams->short_text_ru  =    $TeamsItems_forms['short_text_ru'];

        $teams->full_text_ge   =    $TeamsItems_forms['full_text_ge'];
        $teams->full_text_en   =    $TeamsItems_forms['full_text_en'];
        $teams->full_text_ru   =    $TeamsItems_forms['full_text_ru'];

        $teams->description_ge =    $TeamsItems_forms['description_ge'];
        $teams->description_en =    $TeamsItems_forms['description_en'];
        $teams->description_ru =    $TeamsItems_forms['description_ru'];

        $teams->keywords_ge    =    $TeamsItems_forms['keywords_ge'];
        $teams->keywords_en    =    $TeamsItems_forms['keywords_en'];
        $teams->keywords_ru    =    $TeamsItems_forms['keywords_ru'];

        $teams->save();
    }


    /*ჩანაწერების წაშლა ბაზიდან*/
    public function Delete_teams($teams_id){
        $teams_item = $this->find($teams_id);
        $teams_item->delete();
        return  array('image'=>$teams_item->image, 'tumb'=>$teams_item->tumb, 'menu_id'=>$teams_item->menu_id);
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
