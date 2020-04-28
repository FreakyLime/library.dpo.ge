<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Slider extends Model
{

    protected $table = "Slider";
    /*
    |--------------------------------------------------------------------------
    | Slider Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სლაიდერის წასაკითხათ
    |
    */
    
    // სლაიდები მთავარი გვერდისთვის
    public function GetMainSlider(){

        $slider = Cache::remember('slider', 30/60, function (){
            return $this->Desc('id')->MenuiD(1)->take('4')->get();
        });
        return $slider;

    }
    // სლაიდები ID-ის მიხედვით
    public function GetPageSlider($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleSlider($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სლაიდერის წაკითხვა
    public function GetLikeSlider($slider){

        return $this->NotiD($slider->id)->MenuiD($slider->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Slider Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები სლაიდერისთვის
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
