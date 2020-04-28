<?php
namespace App\Http\Controllers\App\FrontController\Mainpage;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\Standarts\Slider;
use App\Models\App\FrontModels\_Addons\_Helpers\_Services\Services;
use App\Models\App\FrontModels\_Addons\_Helpers\_Campaigns\Campaigns;
use App\Models\App\FrontModels\_Addons\_Helpers\_Events\Events;
use App\Models\App\FrontModels\_Addons\_Helpers\_Teams\Teams;

use App\Models\App\FrontModels\Standarts\Banner;
use App\Models\App\FrontModels\Standarts\Reply;
use App\Models\App\FrontModels\Standarts\Videos;

class MainPageController extends MainController
{

    public  function WebInfoType (Slider $slider, Services $services, Campaigns $campaigns, Events $events, Teams $teams, Banner $banner, Reply $reply,Videos $videos){

        /*
        |--------------------------------------------------------------------------
        | მთავარი გვერდის კონტროლერი!
        |--------------------------------------------------------------------------
        */
        /* |--სხვადასხვა მოდულებიდან ინფორმაციის წაკითხვა------------------------------------| */
        $this->data["MainSlider"]       =  $slider->GetMainSlider();
        $this->data["MainServices"]     =  $services->GetMainServices();
        $this->data["MainCampaigns"]    =  $campaigns->GetMainCampaigns();
        $this->data["OneCampaign"]      =  $campaigns->GetOneCampaign();
        $this->data["MainEvents"]       =  $events->GetMainEvents();
        $this->data["MainTeams"]        =  $teams->GetMainTeams();
        $this->data["MainBanner"]       =  $banner->GetMainBanner();
        $this->data["PollBanner"]       =  $banner->GetPollBanner();
        $this->data["MainReply"]        =  $reply->GetMainReply();
        $this->data["MainVideos"]       =  $videos->GetMainVideos(80);
        


        return view('App.FrontBlades.MainPage.'.$this->data['TS']['main_page'].'.MainPage', $this->data );
    }
}