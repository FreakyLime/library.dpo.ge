<?php
namespace App\Http\Controllers\App\FrontController\_Addons\_Teams;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\MetaTags\MetaTags;
/*
| ფუნქციები სტანდარტული მოდულების წასაკითხათ
*/
use App\Models\App\BackModels\Navigation\Menu;
use App\Models\App\FrontModels\_Addons\_Helpers\_Teams\Teams;

use App\Models\App\FrontModels\Standarts\MoreImages;

class TeamsController extends MainController
{

    public  function Load(Teams $teams){

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        /*$this->data["Meta"] = $this->GetMeta(MetaTags::MetaByMenu($id));*/
        // **************

        $this->data["AllTeams"]   =  $teams->GetAllTeams();

        return view('App.FrontBlades._Addons._Helpers._Teams.Teams', $this->data );
    }

    public  function View($id, Teams $teams, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $Teams = $teams->GetFulleTeams($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Teams);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Team"] =  $Teams;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Teams->id,'teams');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeTeams"] = $teams->GetLikeTeams($Teams);

        return view('App.FrontBlades._Addons._Helpers._Teams.TeamsView', $this->data );
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