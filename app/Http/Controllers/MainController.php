<?php

namespace App\Http\Controllers;

use App\Models\App\Navigation\Navigation; //include loop version
use App\Models\App\BackModels\Category\Category; //include loop version
use App\Models\App\FrontModels\MetaTags\MetaTags;

use Mcamara\LaravelLocalization\LaravelLocalization;

use App\Models\App\BackModels\Settings\Settings;

use File;
class MainController extends Controller
{
    // თემის სეთინგების მასივის მიღება და გადაცემა

    public function __construct()
    {
        // ************** თემის სეთინგების მასივის მიღება და გადაცემა
        $this->data["TS"] = File::getRequire(base_path().'/resources/ThemeSettings/ThemeSettings.php');
        // **************

        // ************** ენის დადგენა და გადაცემა მთელ პროექტში--|
        $lang_detector = new LaravelLocalization();
        $this->data["lang"] = $lang_detector->setLocale();
        // **************

        // ************** მეტა ტეგების წაკითხვა მთავარი გვერდისთვის - Title,Description,Keywords
        $this->data["Meta"] = $this->MetaMain(MetaTags::MetaMain());
        // **************

        // ************** მენიუს წაკითხვა თავის ქვე პუნქტებთან ერთად
        $this->data["Menu"] = Navigation::whereNull('root_id')->where('status','1')->orderBy('pos')->get();
        // **************

        // კატეგორიების წაკითხვა თავის ქვე პუნქტებთან ერთად
        $this->data["Category"] = Category::whereNull('root_id')->where('status','1')->orderBy('pos')->get();
        // **************
        $this->data["Settings"]["event_bg"] = Settings::GetByKey('event_bg');
        $this->data["Settings"]["campaign_bg"] = Settings::GetByKey('campaign_bg');
        $this->data["Settings"]["page_bg"] = Settings::GetByKey('page_bg');
    }

    /*მეტა ტეგების წაკითხვა*/
    public function MetaMain($Main){
        return array(
            'title' => $Main['title_'.$this->data['lang']],
            'description' => $Main['description_'.$this->data['lang']],
            'keywords' => $Main['keywords_'.$this->data['lang']],
            'image' => asset('public/files/logo/logo.png'),
        );
    }
}