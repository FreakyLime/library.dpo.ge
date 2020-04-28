<?php

namespace App\Http\Controllers\App\BackControllers\ModuleManager\Modules;
use App\Http\Controllers\MainController;

use App\Models\App\BackModels\ModuleManager\Modules\TextModule;
use App\Models\App\BackModels\ModuleManager\ModuleList;
use Illuminate\Http\Request;
use HtmlObject\Input;

class TextModuleController extends MainController
{
    public  function LoadText($menu_id, TextModule $TextModule, ModuleList $moduleList){

        // მენიუს ID GET-იდან მოსული
        $this->data["menu_id"] = $menu_id;

        // ვკითხულობთ გვერდის ტექსტს  მიხედვით
        $this->data['PageText'] = $TextModule->GetPageText($menu_id);

        // თუ არსებობს ტექსტი route = განახლებას თუ არადა ვქმნით ახალ ჩანაწერს
        $this->data['route'] = ($this->data['PageText'] ? 'update_text' : 'create_text');

        // არსებული მოდულების სიის წაკითხვა
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._FormManager.TextAddEdit', $this->data );
    }

    // ახალი სიახლის დამატება და რედაქტირება ფორმების მენეჯერის მეშვეობით
    public function CreateText(Request $request, TextModule $TextModule){

        /*ინფორმაციის დამატება */
        $TextModule->SaveText($request->all());
        return Redirect("admin/text_module/list/".$request->menu_id);
    }

    public function UpdateText(Request $request, TextModule $TextModule){

        /*ინფორმაციის განახლება */
        $TextModule->UpdateText($request->all());
        return Redirect("admin/text_module/list/".$request->menu_id);
    }

}