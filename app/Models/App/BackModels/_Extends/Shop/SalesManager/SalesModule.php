<?php

namespace App\Models\App\BackModels\_Extends\Shop\SalesManager;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class SalesModule extends Model
{
    protected $table = "Sales";
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

    public function AllSales(){

        return $this->orderBy('id','desc')->get();
    }

    public function GetSales($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function SaleById($sale_item_id){
        return $this->where('id', $sale_item_id)->first();
    }

    //ბოლო სიახლეები მთავარი გვერდისთვის
    public function LastSales(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*სიახლის დამატება ბაზაში*/
    public function SaveSale($sale_post,$UpImage){

        $sale = new SalesModule;

        $sale->menu_id         =    $sale_post['menu_id'];

        $sale->price         =    $sale_post['price'];
        $sale->aromat          =    $sale_post['aromat'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($sale_post['sale_price']){
            $sale->sale_price  =    $sale_post['sale_price'];
            $sale->sale        =    1;
        }

        $sale->image           =    "files/sales/".$UpImage;
        $sale->tumb            =    "files/sales/tumb/".$UpImage;
        $sale->date            =    Carbon::now()->toDayDateTimeString();
        $sale->main            =    $sale_post['main'];

        $sale->title_ge        =    $sale_post['title_ge'];
        $sale->title_en        =    $sale_post['title_en'];
        $sale->title_ru        =    $sale_post['title_ru'];

        $sale->short_text_ge   =    $sale_post['short_text_ge'];
        $sale->short_text_en   =    $sale_post['short_text_en'];
        $sale->short_text_ru   =    $sale_post['short_text_ru'];

        $sale->full_text_ge    =    $sale_post['full_text_ge'];
        $sale->full_text_en    =    $sale_post['full_text_en'];
        $sale->full_text_ru    =    $sale_post['full_text_ru'];

        $sale->description_ge  =    $sale_post['description_ge'];
        $sale->description_en  =    $sale_post['description_en'];
        $sale->description_ru  =    $sale_post['description_ru'];

        $sale->keywords_ge     =    $sale_post['keywords_ge'];
        $sale->keywords_en     =    $sale_post['keywords_en'];
        $sale->keywords_ru     =    $sale_post['keywords_ru'];

        $sale->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateSale($sale_post,$UpImage){

        $sale = $this->find($sale_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $sale->image          =    "files/sales/".$UpImage;
            $sale->tumb           =    "files/sales/tumb/".$UpImage;
        }

        $sale->menu_id        =    $sale_post['menu_id'];

        $sale->price         =    $sale_post['price'];
        $sale->aromat          =    $sale_post['aromat'];
        /*თუ ფასდაკლება არსებობს ვღნიშნავთ sale=1*/
        if($sale_post['sale_price']){
            $sale->sale_price  =    $sale_post['sale_price'];
            $sale->sale        =    1;
        }
        $sale->date           =    Carbon::now()->toDayDateTimeString();
        $sale->main           =    $sale_post['main'];

        $sale->title_ge       =    $sale_post['title_ge'];
        $sale->title_en       =    $sale_post['title_en'];
        $sale->title_ru       =    $sale_post['title_ru'];

        $sale->short_text_ge  =    $sale_post['short_text_ge'];
        $sale->short_text_en  =    $sale_post['short_text_en'];
        $sale->short_text_ru  =    $sale_post['short_text_ru'];

        $sale->full_text_ge   =    $sale_post['full_text_ge'];
        $sale->full_text_en   =    $sale_post['full_text_en'];
        $sale->full_text_ru   =    $sale_post['full_text_ru'];

        $sale->description_ge =    $sale_post['description_ge'];
        $sale->description_en =    $sale_post['description_en'];
        $sale->description_ru =    $sale_post['description_ru'];

        $sale->keywords_ge    =    $sale_post['keywords_ge'];
        $sale->keywords_en    =    $sale_post['keywords_en'];
        $sale->keywords_ru    =    $sale_post['keywords_ru'];

        $sale->save();
    }


    /*სიახლის წაშლა ბაზიდან*/
    public function DeleteSale($sale_id){
        $sale_item = $this->find($sale_id);
        $sale_item->delete();
        return  array('image'=>$sale_item->image, 'tumb'=>$sale_item->tumb, 'menu_id'=>$sale_item->menu_id);
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
