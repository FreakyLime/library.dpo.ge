<?php
namespace App\Http\Controllers\App\FrontController\Details\Slider;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\Standarts\Slider;
use App\Models\App\FrontModels\Standarts\MoreImages;

class SliderController extends MainController
{

    public  function index($id, Slider $slider, MoreImages $moreImages){

        // სიახლის სრული წაკითხვა
        $Slider = $slider->GetFulleSlider($id);

        // ************** მეტა ტეგების წაკითხვა მენიუს მიხედვით - Title,Description,Keywords
        $this->data["Meta"] = $this->GetMeta($Slider);
        // **************

        /*/////////////////////////////
        |პარამეტრების გადაცემა
        *//////////////////////////////

        // სიახლის სრული წაკითხვა
        $this->data["Slider"] =  $Slider;

        // სიახლის დამატებითი სურათების წაკითხვა
        $this->data["Images"] =  $moreImages->GetMoreImages($Slider->id,'slider');

        // სხვა სიახლის წაკითხვა მენიუს id-ის მიხედვით
        $this->data["LikeSlider"] = $slider->GetLikeSlider($Slider);

        return view('Web._Pages._Slider.Slider', $this->data );
    }

    /*მეტა ტეგების წაკითხვა*/
    public function GetMeta($Slider){
        return array(
            'title' => $Slider['title_'.$this->data['lang']],
            'description' => $Slider['description_'.$this->data['lang']],
            'keywords' => $Slider['keywords_'.$this->data['lang']],
            'image' => asset('public/'.$Slider->image),
        );
    }
}