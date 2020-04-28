<?php

namespace App\Models\App\BackModels\_Extends\Shop\ProductsManager;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ProductsModule extends Model
{
    protected $table = "Products";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სიახლის წაკითხვა ID-ს მიხედვით*/
    public function GetProducts($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function ProductById($product_item_id){
        return $this->where('id', $product_item_id)->first();
    }

    //ბოლო სიახლეები მთავარი გვერდისთვის
    public function LastProducts(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*სიახლის დამატება ბაზაში*/
    public function SaveProduct($product_post,$UpImage){

        $product = new ProductsModule;

        $product->menu_id         =    $product_post['menu_id'];

        $product->price           =    $product_post['price'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($product_post['sale_price']){
            $product->sale_price  =    $product_post['sale_price'];
            $product->sale        =    1;
        }

        $product->image           =    "files/products/".$UpImage;
        $product->tumb            =    "files/products/tumb/".$UpImage;

        $product->date            =    Carbon::now()->toDayDateTimeString();
        $product->main            =    $product_post['main'];

        $product->title_ge        =    $product_post['title_ge'];
        $product->title_en        =    $product_post['title_en'];
        $product->title_ru        =    $product_post['title_ru'];

        $product->short_text_ge   =    $product_post['short_text_ge'];
        $product->short_text_en   =    $product_post['short_text_en'];
        $product->short_text_ru   =    $product_post['short_text_ru'];

        $product->full_text_ge    =    $product_post['full_text_ge'];
        $product->full_text_en    =    $product_post['full_text_en'];
        $product->full_text_ru    =    $product_post['full_text_ru'];

        $product->description_ge  =    $product_post['description_ge'];
        $product->description_en  =    $product_post['description_en'];
        $product->description_ru  =    $product_post['description_ru'];

        $product->keywords_ge     =    $product_post['keywords_ge'];
        $product->keywords_en     =    $product_post['keywords_en'];
        $product->keywords_ru     =    $product_post['keywords_ru'];

        $product->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateProduct($product_post,$UpImage){

        $product = $this->find($product_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $product->image          =    "files/products/".$UpImage;
            $product->tumb           =    "files/products/tumb/".$UpImage;
        }

        $product->menu_id        =    $product_post['menu_id'];

        $product->price         =    $product_post['price'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($product_post['sale_price']){
            $product->sale_price  =    $product_post['sale_price'];
            $product->sale        =    1;
        }
        $product->date           =    Carbon::now()->toDayDateTimeString();
        $product->main           =    $product_post['main'];

        $product->title_ge       =    $product_post['title_ge'];
        $product->title_en       =    $product_post['title_en'];
        $product->title_ru       =    $product_post['title_ru'];

        $product->short_text_ge  =    $product_post['short_text_ge'];
        $product->short_text_en  =    $product_post['short_text_en'];
        $product->short_text_ru  =    $product_post['short_text_ru'];

        $product->full_text_ge   =    $product_post['full_text_ge'];
        $product->full_text_en   =    $product_post['full_text_en'];
        $product->full_text_ru   =    $product_post['full_text_ru'];

        $product->description_ge =    $product_post['description_ge'];
        $product->description_en =    $product_post['description_en'];
        $product->description_ru =    $product_post['description_ru'];

        $product->keywords_ge    =    $product_post['keywords_ge'];
        $product->keywords_en    =    $product_post['keywords_en'];
        $product->keywords_ru    =    $product_post['keywords_ru'];

        $product->save();
    }


    /*სიახლის წაშლა ბაზიდან*/
    public function DeleteProduct($product_id){
        $product_item = $this->find($product_id);
        $product_item->delete();
        return  array('image'=>$product_item->image, 'tumb'=>$product_item->tumb, 'menu_id'=>$product_item->menu_id);
    }

    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები
    |
    */



}
