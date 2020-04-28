<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\Services;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Addons\Helpers\Services\ServicesItemModel;

class ServicesItemController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "150"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "150"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/services_items/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/

    public  function Load($menu_id, ServicesItemModel $servicesModel){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს პროდუქტების სია
        $this->data["GetServices"] = $servicesModel->GetServices($menu_id);

        return view('Admin._Helpers._Services.ServicesList', $this->data );
    }

    //ახალი პროდუქტის დამატება და რედაქტირება
    public function CreateService($menu_id){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "save_service";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._Helpers._Services.ServiceAddEdit', $this->data );
    }

    public function SaveService(Request $request, ServicesItemModel $servicesModel, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes = $this->GetSizes();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }

        //სურათის ატვირთვა (პოსტი, სურათის ფოლდერი ასატვირთად, რუტი ამოსაღებია, ზომები დასამუშავებლად)
        $UpImage = $imageLybrary->UpImage($request,'services',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $servicesModel->SaveService($request->all(),$UpImage);

        return Redirect("admin/services/1");
    }

    //არსებული პროდუქტის რედაქტირება
    public function EditService($service_item_id, ServicesItemModel $servicesModel){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "update_service";

        /*კონკრეტული პროდუქტის წაკითხვა ID-ის მეშვეობით*/
        $this->data["ServiceItem"] = $servicesModel->ServiceById($service_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი პროდუქტის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["ServiceItem"]['menu_id'];

        return view('Admin._Helpers._Services.ServiceAddEdit', $this->data );
    }


    public function UpdateService(Request $request, ServicesItemModel $servicesModel, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes = $this->GetSizes();

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
            $UpImage = $imageLybrary->UpImage($request,'services',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $servicesModel->UpdateService($request->all(),$UpImage);

        return Redirect("admin/services/".$request->menu_id);
    }

    public function DeleteService($record_item_id, ServicesItemModel $servicesModel, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $service_item = $servicesModel->DeleteService($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($service_item['image'],$service_item['tumb']);

        return Redirect("admin/services/".$service_item['menu_id']);
    }

    /*სურათის ზომების განსაზღვრა*/
    public function GetSizes(){
        $sizes["width"]   = $this->width;
        $sizes["height"]  = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        return $sizes;
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}