<?php

namespace App\Models\App\FrontModels\_Extends\_Products;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Input;

class Products extends Model
{
    protected $table = "Products";
    /*
    |--------------------------------------------------------------------------
    | News Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */

    // პროდუქცია მთავარი გვერდისთვის
    public function MainProducts(){

        return $this->take(60)->Main()->orderBy('id','desc')->paginate(12);
    }
    // პროდუქცია ID-ის მიხედვით
    public function GetPageProd(){

        $result =  $this->where(function($query){

            /*არომატების ფილტრი*/
            $aromats_filter = Input::has('aromat') ? Input::get('aromat') : null;
            /*პროდუქტების ფილტრი*/
            $products_filter = Input::has('products') ? Input::get('products') : null;

            /*თუ ამორჩეულია პროდუქტების კატეგორიები*/
            if(isset($products_filter)){

                /*ვატრიალებთ პროდუქტების ციკლს*/
                foreach ($products_filter as $category) {

                    /*თუ არომატების ფილტრი არ არსებობს ვფილტრავთ მხოლოდ კატეგორიებით*/
                    if(!isset($aromats_filter)) {
                        $query->orwhere('menu_id', '=', $category);
                    }

                    /*თუ არსებობს არომატების ფილტრი და კატეგორიების ფილტრი */
                    if(isset($aromats_filter) && isset($products_filter)){
                        /*ვფილტრავთ კატეგორიით და არომატით*/
                        $query->orwhere('menu_id', '=', $category)->wherein('aromat', $aromats_filter);

                    }
                }
            }

            /*თუ არსებობს არომატების ფილტრი  და არ არსებობს კატეგორიების ფილტრი*/
            if(isset($aromats_filter) && !isset($products_filter)) {
                /*ვატრიალებთ პროდუქტების ციკლს*/
                foreach ($aromats_filter as $aromats) {
                    $query->orwhere('aromat', $aromats);
                }
            }

        })->paginate(12)->appends([
            'aromat' => Input::get('aromat'),
            'products' => Input::get('products')
        ]);

        return $result;

    }
    // მსგავსი პროდუქცია კატეგორიის ID-ის მიხედვით
    public function GetLikeProd($ProdId,$category_id){

        return $this->CategoryiD($category_id)->where('id', '!=', $ProdId)->limit(8)->inRandomOrder()->get();
    }

    // ერთი ჩანაწერი კატეგორიის ჩანაწერი ID-ის მიხედვით
    public function GetProductItem($id){

        return $this->iD($id)->first();
    }

    //პირველი ჩანაწერის წაკითხვა


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
