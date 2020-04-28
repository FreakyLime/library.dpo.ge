<?php
namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class BannerModule extends Model
{
    protected $table   = "Banner";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*ბანერის წაკითხვა ID-ს მიხედვით*/
    public function GetBanner($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function BannerById($banner_id){
        return $this->where('id', $banner_id)->first();
    }

    //ბოლო ბანერები მთავარი გვერდისთვის
    public function LastSlides(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*ბანერის დამატება ბაზაში*/
    public function SaveBanner($Banner_forms,$UpImage){

        $banner = new BannerModule;

        $banner->menu_id        =    $Banner_forms['menu_id'];
        $banner->image          =    "files/banner/".$UpImage;
        $banner->tumb           =     "files/banner/tumb/".$UpImage;
        $banner->date           =    Carbon::now()->toDayDateTimeString();
        $banner->url            =    $Banner_forms['url'];
        $banner->target         =    $Banner_forms['target'];

        $banner->title_ge       =    $Banner_forms['title_ge'];
        $banner->title_en       =    $Banner_forms['title_en'];
        $banner->title_ru       =    $Banner_forms['title_ru'];

        $banner->short_text_ge  =    $Banner_forms['short_text_ge'];
        $banner->short_text_en  =    $Banner_forms['short_text_en'];
        $banner->short_text_ru  =    $Banner_forms['short_text_ru'];

        $banner->full_text_ge   =    $Banner_forms['full_text_ge'];
        $banner->full_text_en   =    $Banner_forms['full_text_en'];
        $banner->full_text_ru   =    $Banner_forms['full_text_ru'];

        $banner->description_ge =    $Banner_forms['description_ge'];
        $banner->description_en =    $Banner_forms['description_en'];
        $banner->description_ru =    $Banner_forms['description_ru'];

        $banner->keywords_ge    =    $Banner_forms['keywords_ge'];
        $banner->keywords_en    =    $Banner_forms['keywords_en'];
        $banner->keywords_ru    =    $Banner_forms['keywords_ru'];

        $banner->save();
    }

    /*ბანერის რედაქტირება ბაზაში*/
    public function UpdateBanner($Banner_forms,$UpImage){

        $banner = $this->find($Banner_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $banner->image          =    "files/banner/".$UpImage;
            $banner->tumb           =     "files/banner/tumb/".$UpImage;
        }

        $banner->menu_id        =    $Banner_forms['menu_id'];
        $banner->date           =    Carbon::now()->toDayDateTimeString();
        $banner->url            =    $Banner_forms['url'];
        $banner->target         =    $Banner_forms['target'];

        $banner->title_ge       =    $Banner_forms['title_ge'];
        $banner->title_en       =    $Banner_forms['title_en'];
        $banner->title_ru       =    $Banner_forms['title_ru'];

        $banner->short_text_ge  =    $Banner_forms['short_text_ge'];
        $banner->short_text_en  =    $Banner_forms['short_text_en'];
        $banner->short_text_ru  =    $Banner_forms['short_text_ru'];

        $banner->full_text_ge   =    $Banner_forms['full_text_ge'];
        $banner->full_text_en   =    $Banner_forms['full_text_en'];
        $banner->full_text_ru   =    $Banner_forms['full_text_ru'];

        $banner->description_ge =    $Banner_forms['description_ge'];
        $banner->description_en =    $Banner_forms['description_en'];
        $banner->description_ru =    $Banner_forms['description_ru'];

        $banner->keywords_ge    =    $Banner_forms['keywords_ge'];
        $banner->keywords_en    =    $Banner_forms['keywords_en'];
        $banner->keywords_ru    =    $Banner_forms['keywords_ru'];

        $banner->save();
    }


    /*ბანერის წაშლა ბაზიდან*/
    public function Delete_banner($banner_id){
        $banner_item = $this->find($banner_id);
        $banner_item->delete();
        return  array('image'=>$banner_item->image,'tumb'=>$banner_item->tumb, 'menu_id'=>$banner_item->menu_id);
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
