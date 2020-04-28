<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\SliderModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class SliderModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1000"; /*სურათის სიგრძე*/
      public  $height = ""; /*სურათის სიმაღლე*/
      public  $swidth  = "150"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "150"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/slider/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "slider"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, SliderModule $SliderModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს სლაიდების სია
        $this->data["GetSlider"] = $SliderModule->GetSlider($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.SliderModule', $this->data );
    }

    //ახალი სლაიდის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateSlider($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი სლაიდის ფორმისთვის
        $this->data["route"] = "slider_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("slider","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("slider","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("slider","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveSlider(Request $request, SliderModule $SliderModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Slider_forms = $request->all();

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
        $SliderModule->SaveSlider($request->all(),$UpImage);

        return Redirect("admin/slider_module/list/".$Slider_forms['menu_id']);
    }

    //არსებული სლაიდის რედაქტირება
    public function EditSlider($record_item_id, FormManager $FormManagerM, SliderModule $SliderModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი სლაიდის ფორმისთვის
        $this->data["route"] = "slider_post_update";

        //route-ს სახელი სლაიდის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული სლაიდის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $SliderModule->SliderById($record_item_id);

        /*სლაიდის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი სლაიდის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("slider","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("slider","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("slider","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }


    public function UpdateSlider(Request $request, SliderModule $SliderModule, ImageLybrary $imageLybrary){

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
        $Slider_forms = $request->all();

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
        $SliderModule->UpdateSlider($request->all(),$UpImage);

        return Redirect("admin/slider_module/edit_slider/".$request->record_item_id);
    }

    public function DeleteSlider($record_item_id, SliderModule $SliderModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $SliderModule->Delete_slider($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/slider_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}