<?php

namespace App\Models\App\FrontModels\_Extends\_Sales;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = "Sales";
    /*
    |--------------------------------------------------------------------------
    | News Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */

    // პროდუქცია მთავარი გვერდისთვის
    public function MainSales(){

        return $this->take(4)->Main()->inRandomOrder()->get();
    }
    // პროდუქცია ID-ის მიხედვით
    public function GetPageSales(){

        return $this->orderBy('id','desc')->get();
    }
    // მსგავსი პროდუქცია კატეგორიის ID-ის მიხედვით
    public function GetLikeSales($ProdId,$category_id){

        return $this->CategoryiD($category_id)->where('id', '!=', $ProdId)->limit(8)->inRandomOrder()->get();
    }

    // ერთი ჩანაწერი კატეგორიის ჩანაწერი ID-ის მიხედვით
    public function GetSaleItem($id){

        return $this->iD($id)->first();
    }

    /*
    |--------------------------------------------------------------------------
    | News Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები პროდუქციისთვის
    |
    */

    // გამოჩნდეს მთავარ გვერდზე
    public function scopeMain($query){

        $query->where(['main'=> '1']);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeMenuiD($query,$menu_id){

        $query->where(['menu_id'=> $menu_id]);
    }
    // სადაც მენიუს-ID = შემოსულ-ID-ს
    public function scopeCategoryiD($query,$category_id){

        $query->where(['menu_id'=> $category_id]);
    }
    //ძებნა ID-ის მიხედვით
    public function scopeiD($query,$id){

        $query->where(['id'=> $id]);
    }
}
