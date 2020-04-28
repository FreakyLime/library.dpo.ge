<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\ColorsManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;
use App\Models\App\BackModels\_Addons\ColorsManager\ColorImages;

class ColorImagesController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1700"; /*სურათის სიგრძე*/
    public  $height = ""; /*სურათის სიმაღლე*/
    public  $swidth  = "200"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "200"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/colors/addons/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $folder  = "colors/addons"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public function SaveColorImages(Request $request, ColorImages $colorImages, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $color_images = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }

        //სურათის ატვირთვა
            $UpColorImage = $imageLybrary->UpImage($request,$this->folder,$this->root,$sizes,"color");
            $UpImage = $imageLybrary->UpImage($request,$this->folder,$this->root,$sizes,"image");

        /*ინფორმაციის დამატება + სურათი*/
        $colorImages->SaveColorImages($request->all(),$UpImage,$UpColorImage);

        return Redirect("admin/edit_color/".$color_images['record_item_id']."#images");
    }

    public function DeleteImage($image_id, $color_id, ColorImages $colorImages, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $color_image = $colorImages->DeleteColorImage($image_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($color_image['image'],$color_image['tumb']);

        return Redirect("admin/edit_color/".$color_id."#images");
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}