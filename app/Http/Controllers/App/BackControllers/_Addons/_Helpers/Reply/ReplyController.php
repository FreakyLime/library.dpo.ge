<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\Reply;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\Library\ImageLybrary;

use App\Models\App\BackModels\_Addons\Helpers\Reply\ReplyModel;

class ReplyController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
      public  $width  = "1200"; /*სურათის სიგრძე*/
      public  $height = "720"; /*სურათის სიმაღლე*/
      public  $swidth  = "150"; /*სურათის სიგრძე პატარა*/
      public  $sheight = "150"; /*სურათის სიმაღლე პატარა*/
      public  $root   = "files/reply/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/


    public  function Load($menu_id, ReplyModel $replyModel){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს გამოხმაურების სია
        $this->data["GetReply"] = $replyModel->GetReply($menu_id);

        return view('Admin._Helpers._Reply.ReplyList', $this->data );
    }

    //ახალი გამოხმაურების დამატება და რედაქტირება
    public function CreateReply($menu_id){

        //route-ს სახელი გამოხმაურების ფორმისთვის
        $this->data["route"] = "save_reply";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._Helpers._Reply.ReplyAddEdit', $this->data );
    }

    public function SaveReply(Request $request, ReplyModel $replyModel, ImageLybrary $imageLybrary){

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
        $UpImage = $imageLybrary->UpImage($request,'reply',$this->root,$sizes);

        /*ინფორმაციის დამატება + სურათი*/
        $replyModel->SaveReply($request->all(),$UpImage);

        return Redirect("admin/reply/1");
    }

    //არსებული გამოხმაურების რედაქტირება
    public function EditReply($reply_item_id, ReplyModel $replyModel){

        //route-ს სახელი გამოხმაურების ფორმისთვის
        $this->data["route"] = "update_reply";

        /*კონკრეტული გამოხმაურების წაკითხვა ID-ის მეშვეობით*/
        $this->data["ReplyItem"] = $replyModel->ReplyById($reply_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი გამოხმაურების განახლების შემდეგ
        $this->data["menu_id"] = $this->data["ReplyItem"]['menu_id'];

        return view('Admin._Helpers._Reply.ReplyAddEdit', $this->data );
    }


    public function UpdateReply(Request $request, ReplyModel $replyModel, ImageLybrary $imageLybrary){

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
            $UpImage = $imageLybrary->UpImage($request,'reply',$this->root,$sizes);
        }

        /*ინფორმაციის დამატება + სურათი*/
        $replyModel->UpdateReply($request->all(),$UpImage);

        return Redirect("admin/reply/".$request->menu_id);
    }

    public function DeleteReply($record_item_id, ReplyModel $replyModel, ImageLybrary $imageLybrary){

        /*ინფორმაციის წაშლა + სურათის სახელის აღება*/
        $reply_item = $replyModel->DeleteReply($record_item_id);

        //სურათის წაშლა ფოლდერიდან
        $imageLybrary->DeleteImage($reply_item['image'],$reply_item['tumb']);

        return Redirect("admin/reply/".$reply_item['menu_id']);
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