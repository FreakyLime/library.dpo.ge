<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\ServicesItems;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Addons\Helpers\ServicesItems\ServicesItemsModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;

class ServicesItemsController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width   = "1200"; /*სურათის სიგრძე*/
    public  $height  = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
    public  $root    = "files/services_items/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $Table   = "services_items"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, ServicesItemsModule $ServicesItemsModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს სიახლეების სია
        $this->data["GetServicesItems"] = $ServicesItemsModule->GetServicesItems($menu_id);


        return view('Admin._Helpers._ServicesItems.ServicesItemsList', $this->data );
    }

    //ახალი სიახლის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateServicesItems($menu_id){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "save_service_item";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;


        return view('Admin._Helpers._ServicesItems.ServicesItemsAddEdit', $this->data );
    }

    public function SaveServicesItems(Request $request, ServicesItemsModule $ServicesItemsModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $ServicesItems_forms = $request->all();

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
        $ServicesItemsModule->SaveServicesItems($request->all(),$UpImage);

        return Redirect("admin/services_item/".$ServicesItems_forms['menu_id']);
    }

    //არსებული სიახლის რედაქტირება
    public function EditServicesItems($record_item_id, ServicesItemsModule $ServicesItemsModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "update_service_item";

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["MoreImgRoute"] = "services_images_add";

        /*კონკრეტული სიახლის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $ServicesItemsModule->ServicesItemsById($record_item_id);

        /*სიახლის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი სიახლის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        return view('Admin._Helpers._ServicesItems.ServicesItemsAddEdit', $this->data );
    }


    public function UpdateServicesItems(Request $request, ServicesItemsModule $ServicesItemsModule, ImageLybrary $imageLybrary){


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
        $ServicesItems_forms = $request->all();

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
        $ServicesItemsModule->UpdateServicesItems($request->all(),$UpImage);

        return Redirect("admin/edit_service_item/".$request->record_item_id);
    }

    public function DeleteServicesItems($record_item_id, ServicesItemsModule $ServicesItemsModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $ServicesItemsModule->Delete_servicesItems($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/services_item/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}