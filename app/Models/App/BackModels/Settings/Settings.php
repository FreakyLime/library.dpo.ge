<?php

namespace App\Models\App\BackModels\Settings;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class Settings extends Model
{
    protected $table = "Settings";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*საიტის დასახელების წაკითხვა KeyWord=website_title*/
    public static function GetByKey($KeyWord){

        return Settings::where('keyword',$KeyWord)->first();
    }

    /*სეთინგების ყველა ინპუტის განახლება ციკლის მეშვეობით*/
    public function UpdateInputsByLoop($SettingsArray){

        foreach ($SettingsArray['settings'] as $row){

            $Settings = Settings::where('keyword',$row['keyword'])->first();

            if(isset($row['title_ge'])) {       $Settings->title_ge       =    $row['title_ge'];  }
            if(isset($row['title_en'])) {       $Settings->title_en       =    $row['title_en'];  }
            if(isset($row['title_ru'])) {       $Settings->title_ru       =    $row['title_ru'];  }

            if(isset($row['full_text_ge'])) {       $Settings->full_text_ge       =    $row['full_text_ge'];  }
            if(isset($row['full_text_en'])) {       $Settings->full_text_en       =    $row['full_text_en'];  }
            if(isset($row['full_text_ru'])) {       $Settings->full_text_ru       =    $row['full_text_ru'];  }

            if(isset($row['url'])) {            $Settings->url            =    $row['url'];  }
            if(isset($row['info'])) {           $Settings->info           =    $row['info'];  }
            if(isset($row['embed_map'])) {      $Settings->embed_map      =    $row['embed_map'];  }


            $Settings->save();
        }
    }

    // ვებ-გვერდის დასახელების განახლება
    public function UpdateWebsiteTitle($Titles){

        //დასახელების მოძებნა keyword-ის მეშვეობით
        $WebsiteTitle = $this->where('keyword','website_title')->first();

        $WebsiteTitle->title_ge       =    $Titles['title_ge'];
        $WebsiteTitle->title_en       =    $Titles['title_en'];
        $WebsiteTitle->title_ru       =    $Titles['title_ru'];

        $WebsiteTitle->save();
    }
    // საიტის ლოგოს განახლება
    public function UpdateLogo($UpImage){

        //ლოგოს მოძებნა keyword-ის მეშვეობით
        $WebsiteTitle = $this->where('keyword','logo')->first();

        $WebsiteTitle->image       =    "files/logo/".$UpImage;

        $WebsiteTitle->save();
    }

    // ენების ჩართვა გამორთვა
    public function EnableDisableLang($Lang){

        //დასახელების მოძებნა keyword-ის მეშვეობით
        $WebsiteTitle = $this->where('keyword','lang')->first();

        $WebsiteTitle->title_ge       =    $Lang['lang']['ge'];
        $WebsiteTitle->title_en       =    $Lang['lang']['en'];
        $WebsiteTitle->title_ru       =    $Lang['lang']['ru'];

        $WebsiteTitle->save();
    }

    // ჩვენს შესახების სურათის განახლება (****დამოკიდებულია ****)
    public function UpdateAboutUsCover($UpImage){

        //ლოგოს მოძებნა keyword-ის მეშვეობით
        $WebsiteTitle = $this->where('keyword','about_cover')->first();

        $WebsiteTitle->image       =    "files/helpers/".$UpImage;

        $WebsiteTitle->save();
    }

    // საიტის ლოგოს განახლება
    public function EventBg($UpImage){
        //ლოგოს მოძებნა keyword-ის მეშვეობით
        $EventBg = $this->where('keyword','event_bg')->first();
        $EventBg->image       =    "files/settings/".$UpImage;
        $EventBg->save();
    }
    public function PageBg($UpImage){
        //ლოგოს მოძებნა keyword-ის მეშვეობით
        $PageBg = $this->where('keyword','page_bg')->first();
        $PageBg->image       =    "files/settings/".$UpImage;
        $PageBg->save();
    }
    public function CampaigBg($UpImage){
        //ლოგოს მოძებნა keyword-ის მეშვეობით
        $PageBg = $this->where('keyword','campaign_bg')->first();
        $PageBg->image       =    "files/settings/".$UpImage;
        $PageBg->save();
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
