<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Aromats;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AromatsModel extends Model
{
    protected $table = "Aromats";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*გამოხმაურების წაკითხვა ID-ს მიხედვით*/
    public function GetAromats($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function AromatsById($aromats_item_id){
        return $this->where('id', $aromats_item_id)->first();
    }

    //ბოლო გამოხმაურების მთავარი გვერდისთვის
    public function LastAromats(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*გამოხმაურების დამატება ბაზაში*/
    public function SaveAromats($aromats_post){

        $aromats = new AromatsModel;

        $aromats->menu_id         =    $aromats_post['menu_id'];

        $aromats->date            =    Carbon::now()->toDayDateTimeString();

        $aromats->title_ge        =    $aromats_post['title_ge'];
        $aromats->title_en        =    $aromats_post['title_en'];
        $aromats->title_ru        =    $aromats_post['title_ru'];

        $aromats->save();
    }

    /*გამოხმაურების რედაქტირება ბაზაში*/
    public function UpdateAromats($aromats_post){

        $aromats = $this->find($aromats_post['record_item_id']);

        $aromats->menu_id        =    $aromats_post['menu_id'];
        $aromats->date           =    Carbon::now()->toDayDateTimeString();

        $aromats->title_ge       =    $aromats_post['title_ge'];
        $aromats->title_en       =    $aromats_post['title_en'];
        $aromats->title_ru       =    $aromats_post['title_ru'];

        $aromats->save();
    }


    /*გამოხმაურების წაშლა ბაზიდან*/
    public function DeleteAromats($aromats_id){
        $aromats_item = $this->find($aromats_id);
        $aromats_item->delete();
        return  array('menu_id'=>$aromats_item->menu_id);
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
