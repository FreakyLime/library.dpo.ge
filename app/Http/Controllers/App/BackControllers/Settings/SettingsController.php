<?php
namespace App\Http\Controllers\App\BackControllers\Settings;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use App\Models\App\Library\ImageLybrary;

use Illuminate\Support\Facades\Input;
use App\Models\App\BackModels\Settings\Settings;

class SettingsController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "120"; /*სურათის სიგრძე*/
    public  $height = "65"; /*სურათის სიმაღლე*/
    public  $root   = "files/logo/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $Table  = "logo"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/

    // საიტის სხვადასხვა პარამეტრების წაკითხვა
    public function index(){

        $this->data["Settings"]['website'] = Settings::GetByKey('website');
        $this->data["Settings"]['website_title'] = Settings::GetByKey('website_title');

        $this->data["Settings"]['address'] = Settings::GetByKey('address');
        $this->data["Settings"]['email']   = Settings::GetByKey('email');

        $this->data["Settings"]['phone']   = Settings::GetByKey('phone');
        $this->data["Settings"]['mobile']  = Settings::GetByKey('mobile');

        $this->data["Settings"]['facebook'] = Settings::GetByKey('facebook');
        $this->data["Settings"]['youtube'] = Settings::GetByKey('youtube');
        $this->data["Settings"]['twitter'] = Settings::GetByKey('twitter');

        $this->data["Settings"]['map']    = Settings::GetByKey('map');

        return view('Admin._Settings.Settings', $this->data );
    }

    public function UpdateSettingsByLoop(Settings $Settings, Request $request){

       $SettingsArray = $request->except('_token');

       /*სეთინგების ყველა ინპუტის განახლება ციკლის მეშვეობით*/
       $Settings->UpdateInputsByLoop($SettingsArray);

        return Redirect('admin/settings');

    }


    // საიტის დასახელების რედაქტირება **მთავარი გვერდიდან**
    public  function TitleUpdateImage(Request $request, Settings $Settings, ImageLybrary $imageLybrary){

        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;

        //საიტის სახელის განახლება
        $Settings->UpdateWebsiteTitle($request);
        //არის თუ არა არჩეული სურათი
        if($request->image){
            //სურათის ატვირთვა ფოლდერში
            $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);
            //სურათის განახლება ბაზაში
            $Settings->UpdateLogo($UpImage);
        }

        return Redirect("admin");
    }

    public function OnOffLang(Request $request, Settings $Settings){

        $Settings->EnableDisableLang($request);

        return Redirect("admin");
    }


    public function StaticImages(){



        $this->data["Settings"]['event_bg']    = Settings::GetByKey('event_bg');
        $this->data["Settings"]['page_bg']     = Settings::GetByKey('page_bg');
        $this->data["Settings"]['campaign_bg'] = Settings::GetByKey('campaign_bg');

        return view('Admin._Settings.StaticImages', $this->data );
    }

    public function UpdateEventBg(Request $request, Settings $Settings,imageLybrary $imageLybrary){
        //არის თუ არა არჩეული სურათი
        if($request->image){
            //სურათის ატვირთვა ფოლდერში
            $UpImage = $imageLybrary->UpStaticImage($request);
            //სურათის განახლება ბაზაში
            $Settings->EventBg($UpImage);
        }
        return Redirect("admin/static_images");
    }
    public function UpdatePageBg(Request $request, Settings $Settings,imageLybrary $imageLybrary){
        //არის თუ არა არჩეული სურათი
        if($request->image){
            //სურათის ატვირთვა ფოლდერში
            $UpImage = $imageLybrary->UpStaticImage($request);
            //სურათის განახლება ბაზაში
            $Settings->PageBg($UpImage);
        }
        return Redirect("admin/static_images");
    }

    public function UpdateCampaignBg(Request $request, Settings $Settings,imageLybrary $imageLybrary){
        //არის თუ არა არჩეული სურათი
        if($request->image){
            //სურათის ატვირთვა ფოლდერში
            $UpImage = $imageLybrary->UpStaticImage($request);
            //სურათის განახლება ბაზაში
            $Settings->CampaigBg($UpImage);
        }
        return Redirect("admin/static_images");
    }
}