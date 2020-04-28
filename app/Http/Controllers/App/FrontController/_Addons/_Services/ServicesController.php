<?php
namespace App\Http\Controllers\App\FrontController\_Addons\_Services;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\MetaTags\MetaTags;
/*
| ფუნქციები სტანდარტული მოდულების წასაკითხათ
*/
use App\Models\App\BackModels\Navigation\Menu;
use App\Models\App\FrontModels\_Addons\_Helpers\_Services\Services;
use App\Models\App\FrontModels\_Addons\_Helpers\_ServicesItem\ServicesItem;

use App\Models\App\FrontModels\Standarts\News;
use App\Models\App\FrontModels\Standarts\MoreImages;

class ServicesController extends MainController
{

    public  function index(Services $services){

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        /*$this->data["Meta"] = $this->GetMeta(MetaTags::MetaByMenu($id));*/
        // **************

        $this->data["AllServices"]   =  $services->GetAllServices();

        return view('App.FrontBlades._Addons._Helpers._Services.Services', $this->data );
    }



    public function Load($category_id,ServicesItem $servicesItem){

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        /*$this->data["Meta"] = $this->GetMeta(MetaTags::MetaByMenu($id));*/
        // **************

        $this->data["PageServicesItem"]   =  $servicesItem->GetPageServicesItem($category_id);

        return view('App.FrontBlades._Addons._Helpers._ServicesItem.ServicesItem', $this->data );
    }


    public  function Reed($id, ServicesItem $servicesItem, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $Service = $servicesItem->GetFulleServicesItem($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Service);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Service"] =  $Service;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Service->id,'services_items');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeService"] = $servicesItem->GetLikeServicesItem($Service);

        return view('App.FrontBlades._Addons._Helpers._ServicesItem.ServicesItemReed', $this->data );
    }


    /*მეტა ტეგების წაკითხვა*/
    public function GetMeta($Menu){
        return array(
            'title' => $Menu['title_'.$this->data['lang']],
            'description' => $Menu['description_'.$this->data['lang']],
            'keywords' => $Menu['keywords_'.$this->data['lang']],
            'image' => asset('public/files/logo/logo.png'),
        );
    }
}