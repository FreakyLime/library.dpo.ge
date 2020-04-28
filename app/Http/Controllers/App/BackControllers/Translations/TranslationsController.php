<?php
namespace App\Http\Controllers\App\BackControllers\Translations;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;

use App\Models\App\Library\ImageLybrary;
use App\Models\App\BackModels\Settings\Settings;

class TranslationsController extends MainController
{


    // საიტის სხვადასხვა პარამეტრების წაკითხვა
    public function index(){

        $this->data[""] = "";

        return view('Admin._Translations.Translations', $this->data );
    }


}