<?php
namespace App\Http\Controllers\App\BackControllers\_Extends\BlogManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;


use App\Models\App\BackModels\_Addons\Aromats\Aromats;

use App\Models\App\BackModels\_Extends\Blog\BlogImages;
use App\Models\App\BackModels\_Extends\Blog\BlogModule;

class BlogController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "280"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "350"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/blog/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/


    public  function Load($menu_id, BlogModule $blogModule){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს პროდუქტების სია
        $this->data["GetBlog"] = $blogModule->GetBlog($menu_id);

        return view('Admin._BlogManager.BlogList', $this->data );
    }

    //ახალი პროდუქტის დამატება და რედაქტირება
    public function CreateBlog($menu_id, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "save_blog";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._BlogManager.BlogAddEdit', $this->data );
    }

    public function SaveBlog(Request $request, BlogModule $blogModule, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]   = $this->width;
        $sizes["height"]  = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $blog_post = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }
        //სურათის ატვირთვა (პოსტი, სურათის ფოლდერი ასატვირთად, რუტი ამოსაღებია, ზომები დასამუშავებლად)
        $UpImage = $imageLybrary->UpImage($request,'blog',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $blogModule->SaveBlog($request->all(),$UpImage);

        return Redirect("admin/blog_category/".$blog_post['menu_id']);
    }

    //არსებული პროდუქტის რედაქტირება
    public function EditBlog($blog_item_id, BlogModule $blogModule, BlogImages $blogImages, Aromats $aromats){

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["route"] = "update_blog";

        /*არომატების სია*/
        $this->data["Aromats"] = $aromats->AllAromats();

        //route-ს სახელი პროდუქტის ფორმისთვის
        $this->data["BlogImgRoute"] = "blog_images_add";

        /*კონკრეტული პროდუქტის წაკითხვა ID-ის მეშვეობით*/
        $this->data["BlogItem"] = $blogModule->BlogById($blog_item_id);

        /*პროდუქტის დამატებითი სურათების წაკითხვა*/
        $this->data["BlogImages"] = $blogImages->GetBlogImages($blog_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი პროდუქტის განახლების შემდეგ
        $this->data["menu_id"] = $this->data["BlogItem"]['menu_id'];

        return view('Admin._BlogManager.BlogAddEdit', $this->data );
    }


    public function UpdateBlog(Request $request, BlogModule $blogModule, ImageLybrary $imageLybrary){

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
            $UpImage = $imageLybrary->UpImage($request,'blog',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $blogModule->UpdateBlog($request->all(),$UpImage);

        return Redirect("admin/edit_blog/".$request->record_item_id);
    }

    public function DeleteBlog($record_item_id, BlogModule $blogModule, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $blog_item = $blogModule->DeleteBlog($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($blog_item['image'],$blog_item['tumb']);

        return Redirect("admin/blog_category/".$blog_item['menu_id']);
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}