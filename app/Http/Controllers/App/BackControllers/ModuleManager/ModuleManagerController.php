<?php
namespace App\Http\Controllers\App\BackControllers\ModuleManager;
use App\Http\Controllers\MainController;
use App\Models\App\BackModels\ModuleManager\ModuleList;
use Illuminate\Http\Request;

class ModuleManagerController extends MainController
{
    public  function index(){

        return view('Admin._ModuleManager.ModuleManager', $this->data );
    }

    public  function Load($menu_id, ModuleList $moduleList){

        $this->data["menu_id"] = $menu_id;
        $this->data["GetModules"] = $moduleList->GetModules();

        return view('Admin._ModuleManager.ModuleManager', $this->data );
    }
}