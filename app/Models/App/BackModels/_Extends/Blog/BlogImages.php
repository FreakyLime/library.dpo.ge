<?php

namespace App\Models\App\BackModels\_Extends\Blog;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class BlogImages extends Model
{
    protected $table = "BlogImages";
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
    public function GetBlogImages($blog_id){

        return $this->where('blog_id',$blog_id)->orderBy('id', 'DESC')->get();
    }

    /* დამხმარე სურათის დამატება ბაზაში*/
    public function SaveBlogImages($blog_image,$UpImage){

        $BlogImage = new BlogImages;

        $BlogImage->blog_id     =    $blog_image['record_item_id'];
        $BlogImage->image          =    "files/blog/addons/".$UpImage;
        $BlogImage->tumb           =    "files/blog/addons/tumb/".$UpImage;
        $BlogImage->date           =    Carbon::now()->toDayDateTimeString();
        $BlogImage->title_ge       =    $blog_image['title_ge'];
        $BlogImage->title_en       =    $blog_image['title_en'];
        $BlogImage->title_ru       =    $blog_image['title_ru'];
        $BlogImage->save();
    }

    /* დამხმარე სურათის წაშლა ბაზიდან */
    public function DeleteBlogImage($img_id){
        $BlogImage = $this->find($img_id);
        $BlogImage->delete();
        return  array('image' => $BlogImage->image, 'tumb' => $BlogImage->tumb);

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
