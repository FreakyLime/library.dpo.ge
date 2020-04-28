<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reply extends Model
{

    protected $table = "Reply";
    /*
    |--------------------------------------------------------------------------
    | Reply Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები კომენტარის წასაკითხათ
    |
    */
    
    // კომენტარი მთავარი გვერდისთვის
    public function GetMainReply(){

        return $this->Main()->take('5')->inRandomOrder('id')->get();
    }
    // კომენტარი ID-ის მიხედვით
    public function GetPageReply($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი კომენტარის წაკითხვა ID-ის მიხედვით
    public function GetFulleReply($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი კომენტარის წაკითხვა
    public function GetLikeReply($replys){

        return $this->NotiD($replys->id)->MenuiD($replys->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Reply Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები კომენტარისთვის
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
