<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\GalleryModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class GalleryModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/gallery/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "gallery"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, GalleryModule $GalleryModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს სურათების სია
        $this->data["GetGallery"] = $GalleryModule->GetGallery($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.GalleryModule', $this->data );
    }

    //ახალი სურათის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateGallery($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი სურათის ფორმისთვის
        $this->data["route"] = "gallery_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("gallery","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("gallery","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("gallery","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveGallery(Request $request, GalleryModule $GalleryModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Gallery_forms = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }

        //სურათის ატვირთვა
        $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $GalleryModule->SaveGallery($request->all(),$UpImage);

        return Redirect("admin/gallery_module/list/".$Gallery_forms['menu_id']);
    }

    //არსებული სურათის რედაქტირება
    public function EditGallery($record_item_id, FormManager $FormManagerM, GalleryModule $GalleryModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი სურათის ფორმისთვის
        $this->data["route"] = "gallery_post_update";

        //route-ს სახელი სურათის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული სურათის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $GalleryModule->GalleryById($record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი სურათის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("gallery","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("gallery","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("gallery","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }


    public function UpdateGallery(Request $request, GalleryModule $GalleryModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        /*სურათის ცვლადის გამოცხადება*/
        $UpImage = "";

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Gallery_forms = $request->all();

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
            $imageLybrary->DeleteImage($request->current_image);
            //და ვტვირთავთ ახალ სურათს
            $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $GalleryModule->UpdateGallery($request->all(),$UpImage);

        return Redirect("admin/gallery_module/edit_gallery/".$request->record_item_id);
    }

    public function DeleteGallery($record_item_id, GalleryModule $GalleryModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $GalleryModule->Delete_gallery($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($request->current_image,$request->current_tumb);

        return Redirect("admin/gallery_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}