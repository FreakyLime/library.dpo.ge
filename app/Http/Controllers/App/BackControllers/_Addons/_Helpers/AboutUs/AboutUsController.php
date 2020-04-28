<?php
namespace App\Http\Controllers\App\BackControllers\_Addons\_Helpers\AboutUs;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use App\Models\App\Library\ImageLybrary;

use Illuminate\Support\Facades\Input;
use App\Models\App\BackModels\Settings\Settings;

class AboutUsController extends MainController
{
    //პარამეტრების განსაზღვრა სურათის ასატვირთად
    public  $width  = "300"; /*სურათის სიგრძე*/
    public  $height = "640"; /*სურათის სიმაღლე*/
    public  $root   = "files/helpers/"; /*მისამართი სურათის ასატვირთად public-ფოლდეიდან*/
    public  $Table  = "helpers"; /*მოდელის დასახელება დამატებითი სურათებისთვის*/

    // საიტის სხვადასხვა პარამეტრების წაკითხვა
    public function index(){
        /*Settings წაკითხვა*/
        $this->data["Settings"]['about_cover'] = Settings::GetByKey('about_cover');

        $this->data["Settings"]['about_us_title'] = Settings::GetByKey('about_us_title');
        $this->data["Settings"]['about_us_houres'] = Settings::GetByKey('about_us_houres');
        $this->data["Settings"]['about_us_cal_sat'] = Settings::GetByKey('about_us_cal_sat');
        $this->data["Settings"]['about_us_call_number'] = Settings::GetByKey('about_us_call_number');
        $this->data["Settings"]['about_us_text'] = Settings::GetByKey('about_us_text');

        return view('Admin._Helpers._AboutUs.AboutUs', $this->data );
    }

    public function UpdateAboutUsByLoop(Settings $Settings, Request $request){

       $SettingsArray = $request->except('_token');

       /*სეთინგების ყველა ინპუტის განახლება ციკლის მეშვეობით*/
       $Settings->UpdateInputsByLoop($SettingsArray);

        return Redirect('admin/about_us');

    }


    // საიტის დასახელების რედაქტირება **მთავარი გვერდიდან**
    public  function UpdateAboutUsCover(Request $request, Settings $Settings, ImageLybrary $imageLybrary){
        /*სურათის ზომების განსაზღვრა*/
        $sizes["width"]  = $this->width;
        $sizes["height"] = $this->height;

        //არის თუ არა არჩეული სურათი
        if($request->image){
            //სურათის ატვირთვა ფოლდერში
            $UpImage = $imageLybrary->UpImage($request,$this->Table,$this->root,$sizes);
            //სურათის განახლება ბაზაში
            $Settings->UpdateAboutUsCover($UpImage);
        }

        return Redirect("admin/about_us");
    }
}