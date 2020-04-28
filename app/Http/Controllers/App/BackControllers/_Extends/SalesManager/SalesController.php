<?php
namespace App\Http\Controllers\App\BackControllers\_Extends\SalesManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Extends\Shop\SalesManager\SalesModule;
use App\Models\App\BackModels\_Extends\Shop\SalesManager\SaleImages;

use App\Models\App\BackModels\_Addons\Aromats\Aromats;

class SalesController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "300"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "300"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/sales/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/


    public  function Load($menu_id, SalesModule $salesModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს პროდუქტების სია
        $this->data["GetSales"] = $salesModule->GetSales($menu_id);

        return view('Admin._SalesManager.SalesList', $this->data );
    }

    //ახალი პროდუქტის დამატება და რედაქტირება
    public function CreateSale($menu_id, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "save_sale";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._SalesManager.SaleAddEdit', $this->data );
    }

    public function SaveSale(Request $request, SalesModule $salesModule, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]   = $this->width;
        $sizes["height"]  = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $sale_post = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }
        //სურათის ატვირთვა (პოსტი, სურათის ფოლდერი ასატვირთად, რუტი ამოსაღებია, ზომები დასამუშავებლად)
        $UpImage = $imageLybrary->UpImage($request,'sales',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $salesModule->SaveSale($request->all(),$UpImage);

        return Redirect("admin/sale_category/".$sale_post['menu_id']);
    }

    //არსებული პროდუქტის რედაქტირება
    public function EditSale($sale_item_id, SalesModule $salesModule, SaleImages $saleImages, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "update_sale";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["SaleImgRoute"] = "sale_images_add";

        /*კონკრეტული პროდუქტის წაკითხვა ID-ის მეშვეობით*/
        $this->data["SaleItem"] = $salesModule->SaleById($sale_item_id);

        /*პროდუქტის დამატებითი სურათების წაკითხვა*/
        $this->data["SaleImages"] = $saleImages->GetSaleImages($sale_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი პროდუქტის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["SaleItem"]['menu_id'];

        return view('Admin._SalesManager.SaleAddEdit', $this->data );
    }


    public function UpdateSale(Request $request, SalesModule $salesModule, ImageLybrary $imageLybrary){

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
            $UpImage = $imageLybrary->UpImage($request,'sales',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $salesModule->UpdateSale($request->all(),$UpImage);

        return Redirect("admin/edit_sale/".$request->record_item_id);
    }

    public function DeleteSale($record_item_id, SalesModule $salesModule, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $sale_item = $salesModule->DeleteSale($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($sale_item['image'],$sale_item['tumb']);

        return Redirect("admin/sale_category/".$sale_item['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}