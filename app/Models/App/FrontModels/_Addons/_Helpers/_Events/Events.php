<?php
namespace App\Models\App\FrontModels\_Addons\_Helpers\_Events;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Events extends Model
{

    protected $table = "Events";
    /*
    |--------------------------------------------------------------------------
    | Events Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */
    
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainEvents(){

        return $this->Desc('id')->take('6')->get();
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageEvents($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleEvents($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სიახლეების წაკითხვა
    public function GetLikeEvents($events){

        return $this->NotiD($events->id)->MenuiD($events->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Events Functions
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
