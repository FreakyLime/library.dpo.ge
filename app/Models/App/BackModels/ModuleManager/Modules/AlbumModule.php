<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AlbumModule extends Model
{
    protected $table = "Album";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*ალბომის წაკითხვა ID-ს მიხედვით*/
    public function GetAlbum($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function AlbumById($album_id){
        return $this->where('id', $album_id)->first();
    }
    //ალბომის სიახლეები მთავარი გვერდისთვის
    public function LastNews(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ალბომის დამატება ბაზაში*/
    public function SaveAlbum($Album_forms,$UpImage){

        $album = new AlbumModule;

        $album->menu_id        =    $Album_forms['menu_id'];
        $album->image          =    "files/album/".$UpImage;
        $album->tumb           =     "files/album/tumb/".$UpImage;
        $album->date           =    Carbon::now()->toDayDateTimeString();
        $album->main           =    $Album_forms['main'];

        $album->title_ge       =    $Album_forms['title_ge'];
        $album->title_en       =    $Album_forms['title_en'];
        $album->title_ru       =    $Album_forms['title_ru'];

        $album->short_text_ge  =    $Album_forms['short_text_ge'];
        $album->short_text_en  =    $Album_forms['short_text_en'];
        $album->short_text_ru  =    $Album_forms['short_text_ru'];

        $album->full_text_ge   =    $Album_forms['full_text_ge'];
        $album->full_text_en   =    $Album_forms['full_text_en'];
        $album->full_text_ru   =    $Album_forms['full_text_ru'];

        $album->description_ge =    $Album_forms['description_ge'];
        $album->description_en =    $Album_forms['description_en'];
        $album->description_ru =    $Album_forms['description_ru'];

        $album->keywords_ge    =    $Album_forms['keywords_ge'];
        $album->keywords_en    =    $Album_forms['keywords_en'];
        $album->keywords_ru    =    $Album_forms['keywords_ru'];

        $album->save();
    }

    /*ალბომის რედაქტირება ბაზაში*/
    public function UpdateAlbum($Album_forms,$UpImage){

        $album = $this->find($Album_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $album->image          =    "files/album/".$UpImage;
            $album->tumb           =     "files/album/tumb/".$UpImage;
        }

        $album->menu_id        =    $Album_forms['menu_id'];
        $album->date           =    Carbon::now()->toDayDateTimeString();
        $album->main           =    $Album_forms['main'];

        $album->title_ge       =    $Album_forms['title_ge'];
        $album->title_en       =    $Album_forms['title_en'];
        $album->title_ru       =    $Album_forms['title_ru'];

        $album->short_text_ge  =    $Album_forms['short_text_ge'];
        $album->short_text_en  =    $Album_forms['short_text_en'];
        $album->short_text_ru  =    $Album_forms['short_text_ru'];

        $album->full_text_ge   =    $Album_forms['full_text_ge'];
        $album->full_text_en   =    $Album_forms['full_text_en'];
        $album->full_text_ru   =    $Album_forms['full_text_ru'];

        $album->description_ge =    $Album_forms['description_ge'];
        $album->description_en =    $Album_forms['description_en'];
        $album->description_ru =    $Album_forms['description_ru'];

        $album->keywords_ge    =    $Album_forms['keywords_ge'];
        $album->keywords_en    =    $Album_forms['keywords_en'];
        $album->keywords_ru    =    $Album_forms['keywords_ru'];

        $album->save();
    }


    /*ალბომის წაშლა ბაზიდან*/
    public function Delete_album($album_id){
        $album_item = $this->find($album_id);
        $album_item->delete();
        return  array('image'=>$album_item->image, 'tumb'=>$album_item->tumb, 'menu_id'=>$album_item->menu_id);
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
