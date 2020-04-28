<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\FormManager\FormManager;
use App\Models\App\BackModels\ModuleManager\Modules\AlbumModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;
use App\Models\App\BackModels\ModuleManager\ModuleList;

class AlbumModuleController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/album/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
      public  $Table  = "album"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, AlbumModule $AlbumModule, ModuleList $moduleList){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს ალბომის სია
        $this->data["GetAlbum"] = $AlbumModule->GetAlbum($menu_id);

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager._Modules.AlbumModule', $this->data );
    }

    //ახალი ალბომის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateAlbum($menu_id, FormManager $FormManagerM){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი ალბომის ფორმისთვის
        $this->data["route"] = "album_post_save";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("album","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("album","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("album","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function SaveAlbum(Request $request, AlbumModule $AlbumModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Album_forms = $request->all();

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
        $AlbumModule->SaveAlbum($request->all(),$UpImage);

        return Redirect("admin/album_module/list/".$Album_forms['menu_id']);
    }

    //არსებული ალბომის რედაქტირება
    public function EditAlbum($record_item_id, FormManager $FormManagerM, AlbumModule $AlbumModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი ალბომის ფორმისთვის
        $this->data["route"] = "album_post_update";

        //route-ს სახელი ალბომის ფორმისთვის
        $this->data["MoreImgRoute"] = "more_images_add";

        /*კონკრეტული ალბომის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $AlbumModule->AlbumById($record_item_id);

        /*ალბომის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი ალბომის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        // ფორმის ელემენტების წაკითხვა შესაბამისი მოდულისთვის
        $this->data["FormManagerGE"] = $FormManagerM->GetModuleForms("album","ge");
        $this->data["FormManagerEN"] = $FormManagerM->GetModuleForms("album","en");
        $this->data["FormManagerRU"] = $FormManagerM->GetModuleForms("album","ru");

        return view('Admin._FormManager.AddEdit', $this->data );
    }

    public function UpdateAlbum(Request $request, AlbumModule $AlbumModule, ImageLybrary $imageLybrary){

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
        $Album_forms = $request->all();

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
        $AlbumModule->UpdateAlbum($request->all(),$UpImage);

        return Redirect("admin/album_module/edit_album/".$request->record_item_id);
    }

    public function DeleteAlbum($record_item_id, AlbumModule $AlbumModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $AlbumModule->Delete_album($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/album_module/list/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }
}