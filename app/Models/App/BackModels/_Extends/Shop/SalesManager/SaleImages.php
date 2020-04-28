<?php

namespace App\Models\App\BackModels\_Extends\Shop\SalesManager;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class SaleImages extends Model
{
    protected $table = "SaleImages";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  დამხმარე სურათის Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /* დამხმარე სურათის წაკითხვა ID-ს მიხედვით*/
    public function GetSaleImages($sale_id){

        return $this->where('sale_id',$sale_id)->orderBy('id', 'DESC')->get();
    }

    /* დამხმარე სურათის დამატება ბაზაში*/
    public function SaveSaleImages($sale_image,$UpImage){

        $SaleImage = new SaleImages;

        $SaleImage->sale_id        =    $sale_image['record_item_id'];
        $SaleImage->image          =    "files/sales/addons/".$UpImage;
        $SaleImage->tumb           =    "files/sales/addons/tumb/".$UpImage;
        $SaleImage->date           =    Carbon::now()->toDayDateTimeString();
        $SaleImage->title_ge       =    $sale_image['title_ge'];
        $SaleImage->title_en       =    $sale_image['title_en'];
        $SaleImage->title_ru       =    $sale_image['title_ru'];
        $SaleImage->save();
    }

    /* დამხმარე სურათის წაშლა ბაზიდან */
    public function DeleteSaleImage($img_id){
        $SaleImage = $this->find($img_id);
        $SaleImage->delete();
        return  array('image' => $SaleImage->image, 'tumb' => $SaleImage->tumb);

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
