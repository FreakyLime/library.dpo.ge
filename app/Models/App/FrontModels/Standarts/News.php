<?php

namespace App\Models\App\FrontModels\Standarts;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{

    protected $table = "News";
    /*
    |--------------------------------------------------------------------------
    | News Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */

    // სიახლეები მთავარი გვერდისთვის
    public function GetMainNews()
    {

        return $this->OrderBy('pos', 'asc')->Main()->take('5')->get();
    }
    // სიახლეები ID-ის მიხედვით
    public function GetPageNews($menu_id)
    {

        return $this->OrderBy('pos', 'asc')->MenuiD($menu_id)->get();
    }
    // ერთი სიახლის წაკითხვა ID-ის მიხედვით
    public function GetFulleNews($id)
    {

        return $this->iD($id)->first();
    }
    // სხვა მსგავსი სიახლეების წაკითხვა
    public function GetLikeNews($news)
    {

        return $this->NotiD($news->id)->MenuiD($news->menu_id)->take('5')->inRandomOrder()->get();
    }
    // ძიება
    public function SearchPageNews($searchTerm)
    {
        $res = $this->OrderBy('pos', 'asc')
        ->where('title_ge', 'LIKE', "%$searchTerm%") 
        ->orWhere('title_en', 'LIKE', "%$searchTerm%") 
        ->orWhere('title_ru', 'LIKE', "%$searchTerm%") 
        ->orWhere('full_text_ge', 'LIKE', "%$searchTerm%") 
        ->orWhere('full_text_en', 'LIKE', "%$searchTerm%") 
        ->orWhere('full_text_ru', 'LIKE', "%$searchTerm%") 
        ->get();
        
        return $res;
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
    public function scopeMain($query)
    {

        $query->where(['main' => '1']);
    }
    // სადაც ID = შემოსულ-ID-ს
    public function scopeiD($query, $id)
    {

        $query->where(['id' => $id]);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeMenuiD($query, $menu_id)
    {

        $query->where(['menu_id' => $menu_id]);
    }
    // სადაც ID არ უდრის შემოსულ-ID-ს
    public function scopeNotiD($query, $id)
    {

        $query->where('id', '!=', $id);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeDesc($query, $field)
    {

        $query->orderBy($field, 'desc');
    }
}
