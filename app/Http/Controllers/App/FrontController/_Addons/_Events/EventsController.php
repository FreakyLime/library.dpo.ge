<?php
namespace App\Http\Controllers\App\FrontController\_Addons\_Events;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\MetaTags\MetaTags;
/*
| ფუნქციები სტანდარტული მოდულების წასაკითხათ
*/
use App\Models\App\BackModels\Navigation\Menu;
use App\Models\App\FrontModels\_Addons\_Helpers\_Events\Events;

use App\Models\App\FrontModels\Standarts\MoreImages;

class EventsController extends MainController
{

    public  function View($id, Events $events, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $Events = $events->GetFulleEvents($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Events);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Event"] =  $Events;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Events->id,'events');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeEvent"] = $events->GetLikeEvents($Events);

        return view('App.FrontBlades._Addons._Helpers._Events.EventsView', $this->data );
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