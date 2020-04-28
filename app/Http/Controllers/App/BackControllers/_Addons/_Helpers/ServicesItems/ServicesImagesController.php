<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\ServicesItems;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;

class ServicesImagesController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1200"; /*სურათის სიგრძე*/
    public  $height = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/more_images/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $folder  = "more_images"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public function SaveServicesMoreImages(Request $request, MoreImages $MoreImages, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $product_images = $request->all();

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
        $MoreImages->SaveMoreImages($request->all(),$UpImage);

        return Redirect("admin/edit_service_item/".$product_images['record_item_id']."#images");
    }

        public function DeleteImage($item_id, $img_id, MoreImages $moreImages, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $moreImages->DeleteMoreImages($img_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image_name'],$TableItem['tumb']);

        return Redirect("admin/edit_service_item/".$item_id."#images");
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}