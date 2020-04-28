<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Documents extends Model
{

    protected $table = "Documents";
    /*
    |--------------------------------------------------------------------------
    | News Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */
    
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainNews(){

        return $this->OrderBy('pos','asc')->Main()->take('5')->get();
    }
    public function Search() {
        return $this->OrderBy('pos','asc')->Main()->take('5')->get();
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageNews($menu_id){

        return $this->OrderBy('id','desc')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleNews($id){
        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სიახლეების წაკითხვა
    public function GetLikeNews($news){

        return $this->NotiD($news["id"])->MenuiD($news["menu_id"])->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | News Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები სიახლეებისთვის
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
