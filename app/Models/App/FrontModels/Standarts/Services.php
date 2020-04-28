<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Services extends Model
{

    protected $table = "Services";
    /*
    |--------------------------------------------------------------------------
    | Services Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სერვისების წასაკითხათ
    |
    */
    
    // სერვისები მთავარი გვერდისთვის
    public function GetMainServices(){

        return $this->Main()->take('6')->inRandomOrder('id')->get();
    }
    // სერვისები ID-ის მიხედვით
    public function GetPageServices($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სერვისის წაკითხვა ID-ის მიხედვით
    public function GetFulleServices($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სერვისების წაკითხვა
    public function GetLikeServices($services){

        return $this->NotiD($services->id)->MenuiD($services->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Services Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები სერვისებისთვის
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
