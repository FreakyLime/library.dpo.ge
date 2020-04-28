<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class GalleryModule extends Model
{
    protected $table = "Gallery";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სურათის წაკითხვა ID-ს მიხედვით*/
    public function GetGallery($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function GalleryById($gallery_id){
        return $this->where('id', $gallery_id)->first();
    }

    /*სურათის დამატება ბაზაში*/
    public function SaveGallery($Gallery_forms,$UpImage){

        $gallery = new GalleryModule;

        $gallery->menu_id        =    $Gallery_forms['menu_id'];
        $gallery->image           =    "files/gallery/".$UpImage;
        $gallery->tumb            =    "files/gallery/tumb/".$UpImage;
        $gallery->date           =    Carbon::now()->toDayDateTimeString();
        $gallery->main           =    $Gallery_forms['main'];

        $gallery->title_ge       =    $Gallery_forms['title_ge'];
        $gallery->title_en       =    $Gallery_forms['title_en'];
        $gallery->title_ru       =    $Gallery_forms['title_ru'];

        $gallery->short_text_ge  =    $Gallery_forms['short_text_ge'];
        $gallery->short_text_en  =    $Gallery_forms['short_text_en'];
        $gallery->short_text_ru  =    $Gallery_forms['short_text_ru'];

        $gallery->save();
    }

    /*სურათის რედაქტირება ბაზაში*/
    public function UpdateGallery($Gallery_forms,$UpImage){

        $gallery = $this->find($Gallery_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $gallery->image          =    "files/gallery/".$UpImage;
            $gallery->tumb           =    "files/gallery/tumb/".$UpImage;
        }

        $gallery->menu_id        =    $Gallery_forms['menu_id'];
        $gallery->date           =    Carbon::now()->toDayDateTimeString();
        $gallery->main           =    $Gallery_forms['main'];

        $gallery->title_ge       =    $Gallery_forms['title_ge'];
        $gallery->title_en       =    $Gallery_forms['title_en'];
        $gallery->title_ru       =    $Gallery_forms['title_ru'];

        $gallery->short_text_ge  =    $Gallery_forms['short_text_ge'];
        $gallery->short_text_en  =    $Gallery_forms['short_text_en'];
        $gallery->short_text_ru  =    $Gallery_forms['short_text_ru'];


        $gallery->save();
    }


    /*სურათის წაშლა ბაზიდან*/
    public function Delete_gallery($gallery_id){
        $gallery_item = $this->find($gallery_id);
        $gallery_item->delete();
        return  array('image'=>$gallery_item->image, 'tumb'=>$gallery_item->tumb, 'menu_id'=>$gallery_item->menu_id);
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
