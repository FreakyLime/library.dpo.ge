<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\AdviceModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class AdviceModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1000"; /*სურათის სიგრძე*/
      public  $height = "700"; /*სურათის სიმაღლე*/
      public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/advice/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "advice"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, AdviceModule $AdviceModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს რჩევების სია
        $this->data["GetAdvice"] = $AdviceModule->GetAdvice($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.AdviceModule', $this->data );
    }

    //ახალი რჩევის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateAdvice($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი რჩევის ფორმისთვის
        $this->data["route"] = "advice_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("advice","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("advice","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("advice","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveAdvice(Request $request, AdviceModule $AdviceModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Advice_forms = $request->all();

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
        $AdviceModule->SaveAdvice($request->all(),$UpImage);

        return Redirect("admin/advice_module/list/".$Advice_forms['menu_id']);
    }

    //არსებული რჩევის რედაქტირება
    public function EditAdvice($record_item_id, FormManager $FormManagerM, AdviceModule $AdviceModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი რჩევის ფორმისთვის
        $this->data["route"] = "advice_post_update";

        //route-ს სახელი რჩევის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული რჩევის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $AdviceModule->AdviceById($record_item_id);

        /*რჩევის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი რჩევის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("advice","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("advice","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("advice","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }


    public function UpdateAdvice(Request $request, AdviceModule $AdviceModule, ImageLybrary $imageLybrary){


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
        $Advice_forms = $request->all();

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
        $AdviceModule->UpdateAdvice($request->all(),$UpImage);

        return Redirect("admin/advice_module/edit_advice/".$request->record_item_id);
    }

    public function DeleteAdvice($record_item_id, AdviceModule $AdviceModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $AdviceModule->Delete_advice($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/advice_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}