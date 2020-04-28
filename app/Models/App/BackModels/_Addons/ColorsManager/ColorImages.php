<?php

namespace App\Models\App\BackModels\_Addons\ColorsManager;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ColorImages extends Model
{
    protected $table = "ColorImages";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  დამხმარე სურათის Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /* დამხმარე სურათის წაკითხვა ID-ს მიხედვით*/
    public function GetColorImages($color_id){

        return $this->where('color_id',$color_id)->orderBy('id', 'DESC')->get();
    }

    /* დამხმარე სურათის დამატება ბაზაში*/
    public function SaveColorImages($color_image,$UpImage,$UpColorImage){

        $ColorImage = new ColorImages;

        $ColorImage->color_id     =    $color_image['record_item_id'];

        $ColorImage->image          =    "files/colors/addons/".$UpImage;
        $ColorImage->tumb           =    "files/colors/addons/tumb/".$UpImage;

        $ColorImage->color          =    "files/colors/addons/".$UpColorImage;
        $ColorImage->color_tumb     =    "files/colors/addons/tumb/".$UpColorImage;

        $ColorImage->date           =    Carbon::now()->toDayDateTimeString();
        $ColorImage->title_ge       =    $color_image['title_ge'];
        $ColorImage->title_en       =    $color_image['title_en'];
        $ColorImage->title_ru       =    $color_image['title_ru'];
        $ColorImage->save();
    }

    /* დამხმარე სურათის წაშლა ბაზიდან */
    public function DeleteColorImage($img_id){
        $ColorImage = $this->find($img_id);
        $ColorImage->delete();
        return  array('image' => $ColorImage->image, 'tumb' => $ColorImage->tumb);

    }

    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები
    |
    */
}
