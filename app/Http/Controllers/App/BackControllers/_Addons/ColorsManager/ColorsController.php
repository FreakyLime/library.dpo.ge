<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\ColorsManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Addons\ColorsManager\ColorsModule;
use App\Models\App\BackModels\_Addons\ColorsManager\ColorImages;

class ColorsController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1700"; /*სურათის სიგრძე*/
    public  $height = ""; /*სურათის სიმაღლე*/
    public  $swidth  = "200"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "200"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/colors/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/


    public  function Load($menu_id, ColorsModule $colorsModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს ფერების სია
        $this->data["GetColors"] = $colorsModule->GetColors($menu_id);

        return view('Admin._ColorsManager.ColorsList', $this->data );
    }

    //ახალი ფერის დამატება და რედაქტირება
    public function CreateColor($menu_id){

        //route-ს სახელი ფერის ფორმისთვის
        $this->data["route"] = "save_color";
        $this->data["type"] = $menu_id;

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._ColorsManager.ColorAddEdit', $this->data );
    }

    public function SaveColor(Request $request, ColorsModule $colorsModule, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]   = $this->width;
        $sizes["height"]  = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $color_post = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }
        //სურათის ატვირთვა (პოსტი, სურათის ფოლდერი ასატვირთად, რუტი ამოსაღებია, ზომები დასამუშავებლად)
        $UpImage = $imageLybrary->UpImage($request,'colors',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $colorsModule->SaveColor($request->all(),$UpImage);

        return Redirect("admin/color_category/".$color_post['menu_id']);
    }

    //არსებული ფერის რედაქტირება
    public function EditColor($color_item_id, ColorsModule $colorsModule, ColorImages $colorImages){

        //route-ს სახელი ფერის ფორმისთვის
        $this->data["route"] = "update_color";

        //route-ს სახელი ფერის ფორმისთვის
        $this->data["ColorImgRoute"] = "color_images_add";

        /*კონკრეტული ფერის წაკითხვა ID-ის მეშვეობით*/
        $this->data["ColorItem"] = $colorsModule->ColorById($color_item_id);

        /*ფერის დამატებითი სურათების წაკითხვა*/
        $this->data["ColorImages"] = $colorImages->GetColorImages($color_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი ფერის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["ColorItem"]['menu_id'];

        return view('Admin._ColorsManager.ColorAddEdit', $this->data );
    }


    public function UpdateColor(Request $request, ColorsModule $colorsModule, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        /*სურათის ცვლადის გამოცხადება*/
        $UpImage = "";

        // ვამოწმებთ თუ არსებობს სურათი ვატარებთ ვალიდაციას
        if($request->image){
            //სურათის ვალიდაცია შესაბამის ფორმატებზე
            $validate_result = $this->ImageValidate($request);

            //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
            if($validate_result)
            {
                return Redirect::back()->withErrors($this->validate);
            }

            //ვშლით ძველ სურათს
            $imageLybrary->DeleteImage($request->current_image,$request->current_tumb);
            //და ვტვირთავთ ახალ სურათს
            $UpImage = $imageLybrary->UpImage($request,'colors',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $colorsModule->UpdateColor($request->all(),$UpImage);

        return Redirect("admin/edit_color/".$request->record_item_id);
    }

    public function DeleteColor($record_item_id, ColorsModule $colorsModule, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $color_item = $colorsModule->DeleteColor($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($color_item['image'],$color_item['tumb']);

        return Redirect("admin/color_category/".$color_item['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}