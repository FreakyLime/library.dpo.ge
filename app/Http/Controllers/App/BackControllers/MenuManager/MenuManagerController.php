<?php

namespace App\Http\Controllers\App\BackControllers\MenuManager;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\App\BackModels\Navigation\AdminNavigation;

class MenuManagerController extends MainController
{
    
    public  function index(){

        $this->data["AdminNavigation"] = AdminNavigation::whereNull('root_id')->get();

        return view('Admin._MenuManager.MenuManager', $this->data );
    }
    public function Reorder(Request $request){


        $post = $request->all();
        $msg = $post['reorderarray'];
        return response()->json(array('msg'=> $msg), 200);
    }


}