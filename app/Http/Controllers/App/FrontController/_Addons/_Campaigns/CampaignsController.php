<?php
namespace App\Http\Controllers\App\FrontController\_Addons\_Campaigns;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\MetaTags\MetaTags;
/*
| ფუნქციები სტანდარტული მოდულების წასაკითხათ
*/
use App\Models\App\BackModels\Navigation\Menu;
use App\Models\App\FrontModels\_Addons\_Helpers\_Campaigns\Campaigns;

use App\Models\App\FrontModels\Standarts\MoreImages;

class CampaignsController extends MainController
{

    public  function Load(Campaigns $campaigns){

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        /*$this->data["Meta"] = $this->GetMeta(MetaTags::MetaByMenu($id));*/
        // **************

        $this->data["AllCampaigns"]   =  $campaigns->GetAllCampaigns();

        return view('App.FrontBlades._Addons._Helpers._Campaigns.Campaigns', $this->data );
    }

    public  function View($id, Campaigns $campaigns, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $Campaigns = $campaigns->GetFulleCampaigns($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Campaigns);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Campaign"] =  $Campaigns;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Campaigns->id,'campaigns');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeCampaigns"] = $campaigns->GetLikeCampaigns($Campaigns);

        return view('App.FrontBlades._Addons._Helpers._Campaigns.CampaignsView', $this->data );
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