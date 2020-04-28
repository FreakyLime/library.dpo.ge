<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Campaigns;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class CampaignsModule extends Model
{
    protected $table = "Campaigns";
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
    public function GetCampaigns($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function CampaignsById($campaigns_id){
        return $this->where('id', $campaigns_id)->first();
    }

    //ბოლო ჩანაწერები მთავარი გვერდისთვის
    public function LastCampaigns(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ჩანაწერების დამატება ბაზაში*/
    public function SaveCampaigns($CampaignsItems_forms,$UpImage){

        $campaigns = new CampaignsModule;

        $campaigns->menu_id        =    $CampaignsItems_forms['menu_id'];
        $campaigns->goal           =    $CampaignsItems_forms['goal'];
        $campaigns->time_end       =    $CampaignsItems_forms['time_end'];


        $campaigns->image          =    "files/campaigns/".$UpImage;
        $campaigns->tumb           =    "files/campaigns/tumb/".$UpImage;
        $campaigns->date           =    Carbon::now()->toDayDateTimeString();
        $campaigns->main           =    $CampaignsItems_forms['main'];

        $campaigns->title_ge       =    $CampaignsItems_forms['title_ge'];
        $campaigns->title_en       =    $CampaignsItems_forms['title_en'];
        $campaigns->title_ru       =    $CampaignsItems_forms['title_ru'];

        $campaigns->short_text_ge  =    $CampaignsItems_forms['short_text_ge'];
        $campaigns->short_text_en  =    $CampaignsItems_forms['short_text_en'];
        $campaigns->short_text_ru  =    $CampaignsItems_forms['short_text_ru'];

        $campaigns->full_text_ge   =    $CampaignsItems_forms['full_text_ge'];
        $campaigns->full_text_en   =    $CampaignsItems_forms['full_text_en'];
        $campaigns->full_text_ru   =    $CampaignsItems_forms['full_text_ru'];

        $campaigns->description_ge =    $CampaignsItems_forms['description_ge'];
        $campaigns->description_en =    $CampaignsItems_forms['description_en'];
        $campaigns->description_ru =    $CampaignsItems_forms['description_ru'];

        $campaigns->keywords_ge    =    $CampaignsItems_forms['keywords_ge'];
        $campaigns->keywords_en    =    $CampaignsItems_forms['keywords_en'];
        $campaigns->keywords_ru    =    $CampaignsItems_forms['keywords_ru'];

        $campaigns->save();
    }

    /*ჩანაწერების რედაქტირება ბაზაში*/
    public function UpdateCampaigns($CampaignsItems_forms,$UpImage){

        $campaigns = $this->find($CampaignsItems_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $campaigns->image          =    "files/campaigns/".$UpImage;
            $campaigns->tumb           =     "files/campaigns/tumb/".$UpImage;
        }

        $campaigns->menu_id        =    $CampaignsItems_forms['menu_id'];
        $campaigns->date           =    Carbon::now()->toDayDateTimeString();
        $campaigns->time_end       =    $CampaignsItems_forms['time_end'];
        $campaigns->main           =    $CampaignsItems_forms['main'];

        $campaigns->title_ge       =    $CampaignsItems_forms['title_ge'];
        $campaigns->title_en       =    $CampaignsItems_forms['title_en'];
        $campaigns->title_ru       =    $CampaignsItems_forms['title_ru'];

        $campaigns->short_text_ge  =    $CampaignsItems_forms['short_text_ge'];
        $campaigns->short_text_en  =    $CampaignsItems_forms['short_text_en'];
        $campaigns->short_text_ru  =    $CampaignsItems_forms['short_text_ru'];

        $campaigns->full_text_ge   =    $CampaignsItems_forms['full_text_ge'];
        $campaigns->full_text_en   =    $CampaignsItems_forms['full_text_en'];
        $campaigns->full_text_ru   =    $CampaignsItems_forms['full_text_ru'];

        $campaigns->description_ge =    $CampaignsItems_forms['description_ge'];
        $campaigns->description_en =    $CampaignsItems_forms['description_en'];
        $campaigns->description_ru =    $CampaignsItems_forms['description_ru'];

        $campaigns->keywords_ge    =    $CampaignsItems_forms['keywords_ge'];
        $campaigns->keywords_en    =    $CampaignsItems_forms['keywords_en'];
        $campaigns->keywords_ru    =    $CampaignsItems_forms['keywords_ru'];

        $campaigns->save();
    }


    /*ჩანაწერების წაშლა ბაზიდან*/
    public function Delete_campaigns($campaigns_id){
        $campaigns_item = $this->find($campaigns_id);
        $campaigns_item->delete();
        return  array('image'=>$campaigns_item->image, 'tumb'=>$campaigns_item->tumb, 'menu_id'=>$campaigns_item->menu_id);
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
