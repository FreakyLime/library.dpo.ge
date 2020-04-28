<?php
namespace App\Http\Controllers\App\FrontController\Details\Album;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\Standarts\Album;
use App\Models\App\FrontModels\Standarts\MoreImages;

class AlbumController extends MainController
{

    public  function index($id,  Album $album, MoreImages $moreImages){

        // ალმობის სრული წაკითხვა
        $Album = $album->GetFulleAlbum($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Album);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // ალმობის სრული წაკითხვა
        $this->data["Album"] =  $Album;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Album->id,'album');

        // სხვა ალმობის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeAlbum"] = $album->GetLikeAlbum($Album);

        return view('App.FrontBlades.Details.Album.'.$this->data['TS']['album_view'].'.Album', $this->data );
    }
    /*მეტა ტეგების წაკითხვა*/
    public function GetMeta($Album){
        return array(
            'title' => $Album['title_'.$this->data['lang']],
            'description' => $Album['description_'.$this->data['lang']],
            'keywords' => $Album['keywords_'.$this->data['lang']],
            'image' => asset('public/'.$Album->image),
        );
    }

}