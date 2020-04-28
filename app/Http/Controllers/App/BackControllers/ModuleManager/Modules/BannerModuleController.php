<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\BannerModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class BannerModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "350"; /*სურათის სიმაღლე*/
      public  $swidth  = "150"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "150"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/banner/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "banner"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, BannerModule $BannerModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს ბანერების სია
        $this->data["GetBanner"] = $BannerModule->GetBanner($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.BannerModule', $this->data );
    }

    //ახალი ბანერის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateBanner($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი ბანერის ფორმისთვის
        $this->data["route"] = "banner_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("banner","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("banner","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("banner","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveBanner(Request $request, BannerModule $BannerModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Banner_forms = $request->all();

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
        $BannerModule->SaveBanner($request->all(),$UpImage);

        return Redirect("admin/banner_module/list/".$Banner_forms['menu_id']);
    }

    //არსებული ბანერის რედაქტირება
    public function EditBanner($record_item_id, FormManager $FormManagerM, BannerModule $BannerModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი ბანერის ფორმისთვის
        $this->data["route"] = "banner_post_update";

        //route-ს სახელი ბანერის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული ბანერის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $BannerModule->BannerById($record_item_id);

        /*ბანერის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი ბანერის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("banner","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("banner","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("banner","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }


    public function UpdateBanner(Request $request, BannerModule $BannerModule, ImageLybrary $imageLybrary){

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
        $Banner_forms = $request->all();

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
        $BannerModule->UpdateBanner($request->all(),$UpImage);

        return Redirect("admin/banner_module/edit_banner/".$request->record_item_id);
    }

    public function DeleteBanner($record_item_id, BannerModule $BannerModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $BannerModule->Delete_banner($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/banner_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}