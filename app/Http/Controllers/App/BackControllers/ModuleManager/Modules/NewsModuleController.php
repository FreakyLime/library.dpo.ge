<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;

use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\NewsModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class NewsModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1200"; /*სურათის სიგრძე*/
    public  $height = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/news/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $Table  = "news"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, NewsModule $NewsModule, ModuleList $moduleList)
    {

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს სიახლეების სია
        $this->data["GetNews"] = $NewsModule->GetNews($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.NewsModule', $this->data);
    }

    //ახალი სიახლის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateNews($menu_id, FormManager $FormManagerM)
    {

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "news_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("news", "ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("news", "en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("news", "ru");

        return view('Admin._FormManager.AddEdit', $this->data);
    }

    public function SaveNews(Request $request, NewsModule $NewsModule, ImageLybrary $imageLybrary)
    {

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $News_forms = $request->all();

        $UpImage = false;
        if (isset($News_forms['image'])) {
            //სურათის ვალიდაცია შესაბამის ფორმატებზე
            $validate_result = $this->ImageValidate($request);

            //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
            if ($validate_result) {
                return Redirect::back()->withErrors($this->validate);
            }

            //სურათის ატვირთვა
            $UpImage = $imageLybrary->UpImage($request, $this->Table, $this->root, $sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $NewsModule->SaveNews($request->all(), $UpImage);

        return Redirect("admin/news_module/list/" . $News_forms['menu_id']);
    }

    //არსებული სიახლის რედაქტირება
    public function EditNews($record_item_id, FormManager $FormManagerM, NewsModule $NewsModule, MoreImages $MoreImages)
    {

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "news_post_update";

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული სიახლის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $NewsModule->NewsById($record_item_id);

        /*სიახლის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table, $record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი სიახლის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("news", "ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("news", "en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("news", "ru");

        return view('Admin._FormManager.AddEdit', $this->data);
    }


    public function UpdateNews(Request $request, NewsModule $NewsModule, ImageLybrary $imageLybrary)
    {


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
        $News_forms = $request->all();

        // ვამოწმებთ თუ არსებობს სურათი ვატარებთ ვალიდაციას
        if ($request->image) {
            //სურათის ვალიდაცია შესაბამის ფორმატებზე
            $validate_result = $this->ImageValidate($request);

            //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
            if ($validate_result) {
                return Redirect::back()->withErrors($this->validate);
            }

            //ვშლით ძველ სურათს
            $imageLybrary->DeleteImage($request->current_image, $request->current_tumb);
            //და ვტვირთავთ ახალ სურათს
            $UpImage = $imageLybrary->UpImage($request, $this->Table, $this->root, $sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $NewsModule->UpdateNews($request->all(), $UpImage);

        return Redirect("admin/news_module/edit_news/" . $request->record_item_id);
    }

    public function DeleteNews($record_item_id, NewsModule $NewsModule, ImageLybrary $imageLybrary)
    {

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $NewsModule->Delete_news($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'], $TableItem['tumb']);

        return Redirect("admin/news_module/list/" . $TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request)
    {
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }
}
