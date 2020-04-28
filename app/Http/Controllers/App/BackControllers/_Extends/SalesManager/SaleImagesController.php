<?php
namespace App\Http\Controllers\App\BackControllers\_Extends\SalesManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;
use App\Models\App\BackModels\_Extends\Shop\SalesManager\SaleImages;

class SaleImagesController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1200"; /*სურათის სიგრძე*/
    public  $height = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/sales/addons/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $folder  = "sales/addons"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public function SaveSaleImages(Request $request, SaleImages $saleImages, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $sale_images = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }

        //სურათის ატვირთვა
        $UpImage = $imageLybrary->UpImage($request,$this->folder,$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $saleImages->SaveSaleImages($request->all(),$UpImage);

        return Redirect("admin/edit_sale/".$sale_images['record_item_id']."#images");
    }

    public function DeleteImage($image_id, $sale_id, SaleImages $saleImages, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $sale_image = $saleImages->DeleteSaleImage($image_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($sale_image['image'],$sale_image['tumb']);

        return Redirect("admin/edit_sale/".$sale_id."#images");
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}