<?php

namespace App\Http\Controllers\App\BackControllers;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mcamara\LaravelLocalization\LaravelLocalization;
use App\Models\App\BackModels\ModuleManager\Modules\NewsModule;
use App\Models\App\BackModels\ModuleManager\Modules\AlbumModule;
use App\Models\App\BackModels\ModuleManager\Modules\SliderModule;
use App\Models\App\BackModels\ModuleManager\Modules\VideosModule;

use App\Models\App\BackModels\Settings\Settings;

class AdminIndexController extends MainController
{

    public function __construct(){

    }
    
    public  function index(NewsModule $NewsModule, AlbumModule $AlbumModule, SliderModule $SliderModule, VideosModule $VideosModule, Settings $Settings){

        $lang_detector = new LaravelLocalization();
        $this->data["lang"] = $lang_detector->setLocale();

        //ბოლოს დამატებული სიახლეების გამოტანა
        $this->data["LastNews"]   = $NewsModule->LastNews();
        $this->data["LastAlbum"]  = $AlbumModule->LastNews();
        $this->data["LastSlides"] = $SliderModule->LastSlides();
        $this->data["LastVideos"] = $VideosModule->LastVideos();

        /*Settings წაკითხვა*/
        $this->data["Settings"]['website_title'] = $Settings->GetByKey('website_title');
        $this->data["Settings"]['logo'] = $Settings->GetByKey('logo');
        $this->data["Settings"]['langs'] = $Settings->GetByKey('lang');
        $this->data["Settings"]['website'] = $Settings->GetByKey('website');
        $this->data["Settings"]['facebook'] = $Settings->GetByKey('facebook');
        $this->data["Settings"]['youtube'] = $Settings->GetByKey('youtube');

        return view('Admin._Mainpage._Mainpage', $this->data );
    }
}