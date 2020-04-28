<?php

namespace App\Models\App\BackModels\_Addons\Helpers\ServicesItems;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ServicesItemsModule extends Model
{
    protected $table = "ServicesItem";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სიახლის წაკითხვა ID-ს მიხედვით*/
    public function GetServicesItems($menu_id){

        return $this->orderBy('pos','asc')->where('menu_id',$menu_id)->get();
    }

    public function ServicesItemsById($servicesItems_id){
        return $this->where('id', $servicesItems_id)->first();
    }

    //ბოლო სიახლეები მთავარი გვერდისთვის
    public function LastServicesItems(){
        return $this->take(5)->orderBy('pos','asc')->get();
    }

    /*სიახლის დამატება ბაზაში*/
    public function SaveServicesItems($ServicesItems_forms,$UpImage){

        $servicesItems = new ServicesItemsModule;

        $servicesItems->menu_id        =    $ServicesItems_forms['menu_id'];

        $servicesItems->image          =    "files/services_items/".$UpImage;
        $servicesItems->tumb           =    "files/services_items/tumb/".$UpImage;
        $servicesItems->date           =    Carbon::now()->toDayDateTimeString();
        $servicesItems->main           =    $ServicesItems_forms['main'];
        $servicesItems->pos            =    $ServicesItems_forms['pos'];

        $servicesItems->title_ge       =    $ServicesItems_forms['title_ge'];
        $servicesItems->title_en       =    $ServicesItems_forms['title_en'];
        $servicesItems->title_ru       =    $ServicesItems_forms['title_ru'];

        $servicesItems->short_text_ge  =    $ServicesItems_forms['short_text_ge'];
        $servicesItems->short_text_en  =    $ServicesItems_forms['short_text_en'];
        $servicesItems->short_text_ru  =    $ServicesItems_forms['short_text_ru'];

        $servicesItems->full_text_ge   =    $ServicesItems_forms['full_text_ge'];
        $servicesItems->full_text_en   =    $ServicesItems_forms['full_text_en'];
        $servicesItems->full_text_ru   =    $ServicesItems_forms['full_text_ru'];

        $servicesItems->description_ge =    $ServicesItems_forms['description_ge'];
        $servicesItems->description_en =    $ServicesItems_forms['description_en'];
        $servicesItems->description_ru =    $ServicesItems_forms['description_ru'];

        $servicesItems->keywords_ge    =    $ServicesItems_forms['keywords_ge'];
        $servicesItems->keywords_en    =    $ServicesItems_forms['keywords_en'];
        $servicesItems->keywords_ru    =    $ServicesItems_forms['keywords_ru'];

        $servicesItems->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateServicesItems($ServicesItems_forms,$UpImage){

        $servicesItems = $this->find($ServicesItems_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $servicesItems->image          =    "files/services_items/".$UpImage;
            $servicesItems->tumb           =     "files/services_items/tumb/".$UpImage;
        }

        $servicesItems->menu_id        =    $ServicesItems_forms['menu_id'];
        $servicesItems->date           =    Carbon::now()->toDayDateTimeString();
        $servicesItems->main           =    $ServicesItems_forms['main'];
        $servicesItems->pos            =    $ServicesItems_forms['pos'];

        $servicesItems->title_ge       =    $ServicesItems_forms['title_ge'];
        $servicesItems->title_en       =    $ServicesItems_forms['title_en'];
        $servicesItems->title_ru       =    $ServicesItems_forms['title_ru'];

        $servicesItems->short_text_ge  =    $ServicesItems_forms['short_text_ge'];
        $servicesItems->short_text_en  =    $ServicesItems_forms['short_text_en'];
        $servicesItems->short_text_ru  =    $ServicesItems_forms['short_text_ru'];

        $servicesItems->full_text_ge   =    $ServicesItems_forms['full_text_ge'];
        $servicesItems->full_text_en   =    $ServicesItems_forms['full_text_en'];
        $servicesItems->full_text_ru   =    $ServicesItems_forms['full_text_ru'];

        $servicesItems->description_ge =    $ServicesItems_forms['description_ge'];
        $servicesItems->description_en =    $ServicesItems_forms['description_en'];
        $servicesItems->description_ru =    $ServicesItems_forms['description_ru'];

        $servicesItems->keywords_ge    =    $ServicesItems_forms['keywords_ge'];
        $servicesItems->keywords_en    =    $ServicesItems_forms['keywords_en'];
        $servicesItems->keywords_ru    =    $ServicesItems_forms['keywords_ru'];

        $servicesItems->save();
    }


    /*სიახლის წაშლა ბაზიდან*/
    public function Delete_servicesItems($servicesItems_id){
        $servicesItems_item = $this->find($servicesItems_id);
        $servicesItems_item->delete();
        return  array('image'=>$servicesItems_item->image, 'tumb'=>$servicesItems_item->tumb, 'menu_id'=>$servicesItems_item->menu_id);
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
