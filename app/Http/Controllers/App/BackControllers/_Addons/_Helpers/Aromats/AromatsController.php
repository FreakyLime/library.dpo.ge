<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\Aromats;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use HtmlObject\Input;

use App\Models\App\BackModels\_Addons\Helpers\Aromats\AromatsModel;

class AromatsController extends MainController
{
    public  function Load($menu_id, AromatsModel $aromatsModel){

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // კონკრეტული მენიუს გამოხმაურების სია
        $this->data["GetAromats"] = $aromatsModel->GetAromats($menu_id);

        return view('Admin._Helpers._Aromats.AromatsList', $this->data );
    }

    //ახალი გამოხმაურების დამატება და რედაქტირება
    public function CreateAromats($menu_id){

        //route-ს სახელი გამოხმაურების ფორმისთვის
        $this->data["route"] = "save_prod_aromats";

        //მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        return view('Admin._Helpers._Aromats.AromatsAddEdit', $this->data );
    }

    public function SaveAromats(Request $request, AromatsModel $aromatsModel){

        /*ინფორმაციის დამატება*/
        $aromatsModel->SaveAromats($request->all());

        return Redirect("admin/prod_aromats/1");
    }

    //არსებული გამოხმაურების რედაქტირება
    public function EditAromats($aromats_item_id, AromatsModel $aromatsModel){

        //route-ს სახელი გამოხმაურების ფორმისთვის
        $this->data["route"] = "update_prod_aromats";

        /*კონკრეტული გამოხმაურების წაკითხვა ID-ის მეშვეობით*/
        $this->data["AromatsItem"] = $aromatsModel->AromatsById($aromats_item_id);

        //მენიუს ID Blade-ისთვის რათა მოხდეს რედირექტი გამოხმაურების განახლების შემდეგ
        $this->data["menu_id"] = $this->data["AromatsItem"]['menu_id'];

        return view('Admin._Helpers._Aromats.AromatsAddEdit', $this->data );
    }


    public function UpdateAromats(Request $request, AromatsModel $aromatsModel){

        /*ინფორმაციის დამატება*/
        $aromatsModel->UpdateAromats($request->all());

        return Redirect("admin/prod_aromats/".$request->menu_id);
    }

    public function DeleteAromats($record_item_id, AromatsModel $aromatsModel){

        /*ინფორმაციის წაშლა */
        $aromats_item = $aromatsModel->DeleteAromats($record_item_id);

        return Redirect("admin/prod_aromats/".$aromats_item['menu_id']);
    }

}