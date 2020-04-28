<?php
namespace App\Http\Controllers\App\BackControllers\_Extends\ProductsManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Extends\Shop\ProductsManager\ProductsModule;
use App\Models\App\BackModels\_Extends\Shop\ProductsManager\ProductImages;

use App\Models\App\BackModels\_Addons\Aromats\Aromats;

class ProductsController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "280"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "350"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/products/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/


    public  function Load($menu_id, ProductsModule $productsModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს პროდუქტების სია
        $this->data["GetProducts"] = $productsModule->GetProducts($menu_id);

        return view('Admin._ProductsManager.ProductsList', $this->data );
    }

    //ახალი პროდუქტის დამატება და რედაქტირება
    public function CreateProduct($menu_id, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "save_product";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._ProductsManager.ProductAddEdit', $this->data );
    }

    public function SaveProduct(Request $request, ProductsModule $productsModule, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]   = $this->width;
        $sizes["height"]  = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $product_post = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }
        //სურათის ატვირთვა (პოსტი, სურათის ფოლდერი ასატვირთად, რუტი ამოსაღებია, ზომები დასამუშავებლად)
        $UpImage = $imageLybrary->UpImage($request,'products',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $productsModule->SaveProduct($request->all(),$UpImage);

        return Redirect("admin/product_category/".$product_post['menu_id']);
    }

    //არსებული პროდუქტის რედაქტირება
    public function EditProduct($product_item_id, ProductsModule $productsModule, ProductImages $productImages, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "update_product";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["ProductImgRoute"] = "product_images_add";

        /*კონკრეტული პროდუქტის წაკითხვა ID-ის მეშვეობით*/
        $this->data["ProductItem"] = $productsModule->ProductById($product_item_id);

        /*პროდუქტის დამატებითი სურათების წაკითხვა*/
        $this->data["ProductImages"] = $productImages->GetProductImages($product_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი პროდუქტის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["ProductItem"]['menu_id'];

        return view('Admin._ProductsManager.ProductAddEdit', $this->data );
    }


    public function UpdateProduct(Request $request, ProductsModule $productsModule, ImageLybrary $imageLybrary){

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
            $UpImage = $imageLybrary->UpImage($request,'products',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $productsModule->UpdateProduct($request->all(),$UpImage);

        return Redirect("admin/edit_product/".$request->record_item_id);
    }

    public function DeleteProduct($record_item_id, ProductsModule $productsModule, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $product_item = $productsModule->DeleteProduct($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($product_item['image'],$product_item['tumb']);

        return Redirect("admin/product_category/".$product_item['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}