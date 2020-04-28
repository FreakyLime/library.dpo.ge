<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Gallery extends Model
{

    protected $table = "Gallery";
    /*
    |--------------------------------------------------------------------------
    | Gallery Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები გალერეის წასაკითხათ
    |
    */
    
    // გალერეა მთავარი გვერდისთვის
    public function GetMainGallery(){

        return $this->Desc('id')->Main()->take('6')->get();
    }
    // გალერეა ID-ის მიხედვით
    public function GetPageGallery($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი გალერიეის წაკითხვა ID-ის მიხედვით
    public function GetFulleGallery($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი გალერეის წაკითხვა
    public function GetLikeGallery($news){

        return $this->NotiD($news->id)->MenuiD($news->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Gallery Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები გალერეისთვის
    |
    */
    
    // გამოჩნდეს მთავარ გვერდზე
    public function scopeMain($query){

        $query->where(['main'=> '1']);
    }
    // სადაც ID = შემოსულ-ID-ს
    public function scopeiD($query,$id){

        $query->where(['id'=> $id]);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeMenuiD($query,$menu_id){

        $query->where(['menu_id'=> $menu_id]);
    }
    // სადაც ID არ უდრის შემოსულ-ID-ს
    public function scopeNotiD($query,$id){

        $query->where('id', '!=', $id);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeDesc($query,$field){

        $query->orderBy($field, 'desc');
    }
}
