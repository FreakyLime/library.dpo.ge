<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Album extends Model
{

    protected $table = "Album";
    /*
    |--------------------------------------------------------------------------
    | Album Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები ალბომის წასაკითხათ
    |
    */
    
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainAlbum(){

        return $this->Desc('id')->Main()->take('6')->get();
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageAlbum($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleAlbum($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი ალბომის წაკითხვა
    public function GetLikeAlbum($album){

        return $this->NotiD($album->id)->MenuiD($album->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Album Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები ალბომისთვის
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
