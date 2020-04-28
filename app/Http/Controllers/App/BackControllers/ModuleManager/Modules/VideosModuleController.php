<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\VideosModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class VideosModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/videos/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "videos"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, VideosModule $VideosModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს ვიდეოების სია
        $this->data["GetVideos"] = $VideosModule->GetVideos($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.VideosModule', $this->data );
    }

    //ახალი ვიდეოს დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateVideos($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი ვიდეოს ფორმისთვის
        $this->data["route"] = "videos_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("videos","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("videos","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("videos","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveVideos(Request $request, VideosModule $VideosModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Videos_forms = $request->all();

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
        $VideosModule->SaveVideos($request->all(),$UpImage);

        return Redirect("admin/videos_module/list/".$Videos_forms['menu_id']);
    }

    //არსებული ვიდეოს რედაქტირება
    public function EditVideos($record_item_id, FormManager $FormManagerM, VideosModule $VideosModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი ვიდეოს ფორმისთვის
        $this->data["route"] = "videos_post_update";

        //route-ს სახელი ვიდეოს ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული ვიდეოს წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $VideosModule->VideosById($record_item_id);

        /*ვიდეოს დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი ვიდეოს განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("videos","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("videos","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("videos","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }


    public function UpdateVideos(Request $request, VideosModule $VideosModule, ImageLybrary $imageLybrary){

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
        $Videos_forms = $request->all();

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
            $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $VideosModule->UpdateVideos($request->all(),$UpImage);

        return Redirect("admin/videos_module/edit_videos/".$request->record_item_id);
    }

    public function DeleteVideos($record_item_id, VideosModule $VideosModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $VideosModule->Delete_videos($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/videos_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}