<?php
namespace App\Http\Controllers\App\BackControllers\_Extends\BlogManager;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;
use App\Models\App\BackModels\_Extends\Blog\BlogImages;

class BlogImagesController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "1200"; /*სურათის სიგრძე*/
    public  $height = "720"; /*სურათის სიმაღლე*/
    public  $swidth  = "280"; /*სურათის სიგრძე პატარა*/
    public  $sheight = "350"; /*სურათის სიმაღლე პატარა*/
    public  $root   = "files/blog/addons/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $folder  = "blog/addons"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/


    public function SaveBlogImages(Request $request, BlogImages $blogImages, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;
        $sizes["swidth"]  = $this->swidth;
        $sizes["sheight"] = $this->sheight;

        // პოსტით მოსული ყველა ინფორმაციის წაკითხვა
        $blog_images = $request->all();

        //სურათის ვალიდაცია შესაბამის ფორმატებზე
        $validate_result = $this->ImageValidate($request);

        //სურათის ატვირთვისას პრობლემის შემთხვევაში ვაბრუნებთ უკან შეცდომის შეტყობინებით
        if($validate_result)
        {
            return Redirect::back()->withErrors($this->validate);
        }

        //სურათის ატვირთვა
        $UpImage = $imageLybrary->UpImage($request,$this->folder,$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $blogImages->SaveBlogImages($request->all(),$UpImage);

        return Redirect("admin/edit_blog/".$blog_images['record_item_id']."#images");
    }

    public function DeleteImage($image_id, $blog_id, BlogImages $blogImages, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $blog_image = $blogImages->DeleteBlogImage($image_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($blog_image['image'],$blog_image['tumb']);

        return Redirect("admin/edit_blog/".$blog_id."#images");
    }

    //სურათის ვალიდაცია შესაბამის ფორმატებზე
    public function ImageValidate($request){
        return $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

}