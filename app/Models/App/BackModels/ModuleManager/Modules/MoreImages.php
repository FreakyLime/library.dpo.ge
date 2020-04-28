<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class MoreImages extends Model
{
    protected $table = "more_images";
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
    public function GetMoreImages($model, $model_id){

        return $this->where('model',$model)->where('model_id',$model_id)->orderBy('id', 'DESC')->get();
    }

    /* დამხმარე სურათის დამატება ბაზაში*/
    public function SaveMoreImages($Request_forms,$UpImage){

        $MoreImages = new MoreImages;

        $MoreImages->model_id       =    $Request_forms['record_item_id'];
        $MoreImages->model          =    $Request_forms['module'];
        $MoreImages->image              =    "files/more_images/".$UpImage;
        $MoreImages->tumb               =    "files/more_images/tumb/".$UpImage;
        $MoreImages->date           =    Carbon::now()->toDayDateTimeString();
        $MoreImages->title_ge       =    $Request_forms['title_ge'];
        $MoreImages->title_en       =    $Request_forms['title_en'];
        $MoreImages->title_ru       =    $Request_forms['title_ru'];
        $MoreImages->save();
    }

    /* დამხმარე სურათის წაშლა ბაზიდან */
    public function DeleteMoreImages($img_id){
        $more_image = $this->find($img_id);
        $more_image->delete();
        return  array('image_name' => $more_image->image, 'tumb'=>$more_image->tumb);

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
