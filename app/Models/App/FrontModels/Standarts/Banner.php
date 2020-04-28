<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Banner extends Model
{

    protected $table = "Banner";
    /*
    |--------------------------------------------------------------------------
    | Banner Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები ბანერების წასაკითხათ
    |
    */
    
    // ბანერები მთავარი გვერდისთვის
    public function GetMainBanner(){

        return $this->where('menu_id',1)->inRandomOrder()->get();
    }
    public function GetPollBanner(){

        return $this->where('menu_id',2)->inRandomOrder()->first();
    }
    // ბანერები ID-ის მიხედვით
    public function GetPageBanner($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleBanner($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი ბანერების წაკითხვა
    public function GetLikeBanner($banner){

        return $this->NotiD($banner->id)->MenuiD($banner->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Banner Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები ბანერებისთვის
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
