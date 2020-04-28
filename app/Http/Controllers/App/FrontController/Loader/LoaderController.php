<?php
namespace App\Http\Controllers\App\FrontController\Loader;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\MetaTags\MetaTags;
/*
| ფუნქციები სტანდარტული მოდულების წასაკითხათ
*/
use App\Models\App\BackModels\Navigation\Menu;
use App\Models\App\FrontModels\Standarts\News;
use App\Models\App\FrontModels\Standarts\Album;
use App\Models\App\FrontModels\Standarts\Videos;
use App\Models\App\FrontModels\Standarts\Gallery;
use App\Models\App\FrontModels\Standarts\Banner;
use App\Models\App\FrontModels\Standarts\Text;

class LoaderController extends MainController
{

    public  function index($id, News $news, Album $album, Gallery $gallery, Videos $videos, Banner $banner, Text $text){

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta(MetaTags::MetaByMenu($id));
        // **************

        //აქტიური მენიუს წაკითხვა გვერდის სათაურისთვის
        $this->data["CurrentMenu"] = Menu::find($id);

        $this->data["Text"]   = $text->GetPageText($id);
        $this->data["News"]   = $news->GetPageNews($id);
        $this->data["Album"]  = $album->GetPageAlbum($id);
        $this->data["Videos"] = $videos->GetPageVideos($id);
        $this->data["Images"] = $gallery->GetPageGallery($id);
        $this->data["Banner"] = $banner->GetPageBanner($id);

        return view('App.FrontBlades.Loader.Loader.'.$this->data['TS']['loader_page'].'.Loader', $this->data );
    }

    public function search($search, News $news) {
        $this->data["News"] = $news->SearchPageNews($search);
        return view('App.FrontBlades.Loader.Loader.'.$this->data['TS']['loader_page'].'.Search', $this->data );
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