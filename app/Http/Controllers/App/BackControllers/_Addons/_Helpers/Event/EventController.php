<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\Event;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Addons\Helpers\Events\EventsModule;
use App\Models\App\BackModels\ModuleManager\Modules\MoreImages;

class EventController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width   = "1200"; /*სურათის სიგრძე*/
    public  $height  = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
    public  $root    = "files/events/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $Table   = "events"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public  function Load($menu_id, EventsModule $EventsModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს სიახლეების სია
        $this->data["GetEvents"] = $EventsModule->GetEvents($menu_id);


        return view('Admin._Helpers._Events.EventsList', $this->data );
    }

    //ახალი სიახლის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateItems($menu_id){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "save_event_item";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;


        return view('Admin._Helpers._Events.EventsAddEdit', $this->data );
    }

    public function SaveItems(Request $request, EventsModule $EventsModule, ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $Events_forms = $request->all();

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
        $EventsModule->SaveEvents($request->all(),$UpImage);

        return Redirect("admin/events/".$Events_forms['menu_id']);
    }

    //არსებული სიახლის რედაქტირება
    public function EditItems($record_item_id, EventsModule $EventsModule, MoreImages $MoreImages){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;
        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["route"] = "update_event_item";

        //route-ს სახელი სიახლის ფორმისთვის
        $this->data["MoreImgRoute"] = "event_images_add";

        /*კონკრეტული სიახლის წაკითხვა ID-ის მეშვეობით*/
        $this->data["TableItem"] = $EventsModule->EventsById($record_item_id);

        /*სიახლის დამატებითი სურათების წაკითხვა*/
        $this->data["TableImages"] = $MoreImages->GetMoreImages($this->Table,$record_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი სიახლის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["TableItem"]['menu_id'];

        return view('Admin._Helpers._Events.EventsAddEdit', $this->data );
    }


    public function UpdateItems(Request $request, EventsModule $EventsModule, ImageLybrary $imageLybrary){


        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

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
            $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $EventsModule->UpdateEvents($request->all(),$UpImage);

        return Redirect("admin/edit_event_item/".$request->record_item_id);
    }

    public function DeleteItems($record_item_id, EventsModule $EventsModule,ImageLybrary $imageLybrary){

        /*მოდულის გადაცემა blade-სთვის*/
        $this->data["Table"] = $this->Table;

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $TableItem = $EventsModule->Delete_events($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($TableItem['image'],$TableItem['tumb']);

        return Redirect("admin/events/".$TableItem['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}