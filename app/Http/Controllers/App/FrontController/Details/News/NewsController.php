<?php
namespace App\Http\Controllers\App\FrontController\Details\News;
use App\Http\Controllers\MainController;


use App\Models\App\FrontModels\Standarts\News;
use App\Models\App\FrontModels\Standarts\MoreImages;

class NewsController extends MainController
{

    public  function index($id, News $news, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $News = $news->GetFulleNews($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($News);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["News"] =  $News;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($News->id,'news');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeNews"] = $news->GetLikeNews($News);

        return view('App.FrontBlades.Details.News.'.$this->data['TS']['news_view'].'.News', $this->data );
    }

    /*მეტა ტეგების წაკითხვა*/
    public function GetMeta($News){
        return array(
            'title' => $News['title_'.$this->data['lang']],
            'description' => $News['description_'.$this->data['lang']],
            'keywords' => $News['keywords_'.$this->data['lang']],
            'image' => asset('public/'.$News->image),
        );
    }
}