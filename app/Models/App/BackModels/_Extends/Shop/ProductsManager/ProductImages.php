<?php

namespace App\Models\App\BackModels\_Extends\Shop\ProductsManager;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class ProductImages extends Model
{
    protected $table = "ProductImages";
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
    public function GetProductImages($product_id){

        return $this->where('product_id',$product_id)->orderBy('id', 'DESC')->get();
    }

    /* დამხმარე სურათის დამატება ბაზაში*/
    public function SaveProductImages($product_image,$UpImage){

        $ProductImage = new ProductImages;

        $ProductImage->product_id     =    $product_image['record_item_id'];
        $ProductImage->image          =    "files/products/addons/".$UpImage;
        $ProductImage->tumb           =    "files/products/addons/tumb/".$UpImage;
        $ProductImage->date           =    Carbon::now()->toDayDateTimeString();
        $ProductImage->title_ge       =    $product_image['title_ge'];
        $ProductImage->title_en       =    $product_image['title_en'];
        $ProductImage->title_ru       =    $product_image['title_ru'];
        $ProductImage->save();
    }

    /* დამხმარე სურათის წაშლა ბაზიდან */
    public function DeleteProductImage($img_id){
        $ProductImage = $this->find($img_id);
        $ProductImage->delete();
        return  array('image' => $ProductImage->image, 'tumb' => $ProductImage->tumb);

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
