<?php

namespace App\Models\App\FrontModels\Standarts;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Videos extends Model
{

    protected $table = "Videos";
    /*
    |--------------------------------------------------------------------------
    | Videos Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები ალბომის წასაკითხათ
    |
    */
    
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainVideos($menu_id){

        $result =  $this->Desc('id')->where('menu_id',$menu_id)->take('3')->get();
        return $result;
        
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageVideos($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleVideos($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი ალბომის წაკითხვა
    public function GetLikeVideos($videos){

        return $this->NotiD($videos->id)->MenuiD($videos->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Videos Functions
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
