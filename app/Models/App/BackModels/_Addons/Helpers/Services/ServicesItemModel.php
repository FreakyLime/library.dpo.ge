<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Services;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ServicesItemModel extends Model
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

    /*სერვისის წაკითხვა ID-ს მიხედვით*/
    public function GetServices($menu_id){

        return $this->orderBy('pos','asc')->where('menu_id',$menu_id)->get();
    }

    public function ServiceById($service_item_id){
        return $this->where('id', $service_item_id)->first();
    }

    //ბოლო სერვისის მთავარი გვერდისთვის
    public function LastServices(){
        return $this->take(5)->orderBy('pos','asc')->get();
    }

    /*სერვისის დამატება ბაზაში*/
    public function SaveService($service_post,$UpImage){

        $service = new ServicesItemModel;

        $service->menu_id         =    $service_post['menu_id'];
        $service->url             =    $service_post['url'];
        $service->pos             =    $service_post['pos'];

        $service->image           =    "files/services/".$UpImage;
        $service->tumb            =    "files/services/tumb/".$UpImage;

        $service->main            =    $service_post['main'];
        $service->date            =    Carbon::now()->toDayDateTimeString();

        $service->title_ge        =    $service_post['title_ge'];
        $service->title_en        =    $service_post['title_en'];
        $service->title_ru        =    $service_post['title_ru'];

        $service->short_text_ge   =    $service_post['short_text_ge'];
        $service->short_text_en   =    $service_post['short_text_en'];
        $service->short_text_ru   =    $service_post['short_text_ru'];

        $service->save();
    }

    /*სერვისის რედაქტირება ბაზაში*/
    public function UpdateService($service_post,$UpImage){

        $service = $this->find($service_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $service->image          =    "files/services/".$UpImage;
            $service->tumb           =    "files/services/tumb/".$UpImage;
        }

        $service->menu_id        =    $service_post['menu_id'];
        $service->url             =    $service_post['url'];
        $service->pos             =    $service_post['pos'];
        
        $service->date           =    Carbon::now()->toDayDateTimeString();
        $service->main           =    $service_post['main'];

        $service->title_ge       =    $service_post['title_ge'];
        $service->title_en       =    $service_post['title_en'];
        $service->title_ru       =    $service_post['title_ru'];

        $service->short_text_ge  =    $service_post['short_text_ge'];
        $service->short_text_en  =    $service_post['short_text_en'];
        $service->short_text_ru  =    $service_post['short_text_ru'];

        $service->save();
    }


    /*სერვისის წაშლა ბაზიდან*/
    public function DeleteService($service_id){
        $service_item = $this->find($service_id);
        $service_item->delete();
        return  array('image'=>$service_item->image, 'tumb'=>$service_item->tumb, 'menu_id'=>$service_item->menu_id);
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
