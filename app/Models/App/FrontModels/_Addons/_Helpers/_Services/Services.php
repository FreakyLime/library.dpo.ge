<?php
namespace App\Models\App\FrontModels\_Addons\_Helpers\_Services;

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
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */
    
    // სიახლეები მთავარი გვერდისთვის
    public function GetMainServices(){

        return $this->orderBy('pos','asc')->Main()->take('4')->get();
    }
    // სიახლეები მთავარი გვერდისთვის
    public function GetAllServices(){

        return $this->orderBy('pos','asc')->get();
    }

    // სიახლეები ID-ის მიხედვით
    public function GetPageServices($menu_id){

        return $this->orderBy('pos','asc')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleServices($id){

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სიახლეების წაკითხვა
    public function GetLikeServices($services){

        return $this->NotiD($services->id)->MenuiD($services->menu_id)->take('5')->inRandomOrder()->get();
    }
    
    /*
    |--------------------------------------------------------------------------
    | Services Functions
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
