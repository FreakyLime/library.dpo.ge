<?php
namespace App\Models\App\FrontModels\_Addons\_Helpers\_Teams;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Teams extends Model
{

    protected $table = "Teams";
    /*
    |--------------------------------------------------------------------------
    | Teams Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */

    // სიახლეები მთავარი გვერდისთვის
    public function GetAllTeams(){

        return $this->Desc('id')->get();
    }
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainTeams(){

        return $this->Desc('id')->take('6')->get();
    }
    // სიახლეები მთავარი გვერდისთვის
    public function GetOneTeam(){

        return $this->main()->first();
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageTeams($menu_id){

        return $this->Desc('id')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleTeams($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სიახლეების წაკითხვა
    public function GetLikeTeams($teams){

        return $this->NotiD($teams->id)->MenuiD($teams->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Teams Functions
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
