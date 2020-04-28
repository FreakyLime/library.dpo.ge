<?php

namespace App\Http\Controllers\App\FrontController\Details\Documents;

use App\Http\Controllers\MainController;


use App\Models\App\FrontModels\Standarts\Documents;
use App\Models\App\FrontModels\Standarts\MoreImages;

class DocumentsController extends MainController
{

    public  function index($id, Documents $news, MoreImages $moreImages)
    {

        // სიახლის სრული წაკითხვა
        $News = $news->GetFulleNews($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($News);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        */ /////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Documents"] =  $News;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] = []; // $moreImages->GetMoreImages($News->id,'news');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeNews"] = $news->GetLikeNews($News);

        return view('App.FrontBlades.Details.Documents.' . $this->data['TS']['documents_view'] . '.Documents', $this->data);
    }

    public function search()
    {
        $docs = new Documents;
        $News = $docs->Search();

        $this->data["Meta"] = ['title_ge' => 'test', 'description_ge' => '', 'keywords_ge' => ''];
        $this->data["Documents"] =  $News;

        return view('App.FrontBlades.Details.Documents.' . $this->data['TS']['documents_view'] . '.DocumentsSearch', $this->data);
    }

    /*მეტა ტეგების წაკითხვა*/
    public function GetMeta($News)
    {
        return array(
            'title' => $News['title_' . $this->data['lang']],
            'description' => $News['description_' . $this->data['lang']],
            'keywords' => $News['keywords_' . $this->data['lang']],
            //'image' => asset('public/'.$News->image),
        );
    }
}
