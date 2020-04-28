<?php

namespace App\Models\App\BackModels\_Extends\Blog;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class BlogModule extends Model
{
    protected $table = "Blog";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სიახლის წაკითხვა ID-ს მიხედვით*/
    public function GetBlog($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function BlogById($blog_item_id){
        return $this->where('id', $blog_item_id)->first();
    }

    //ბოლო სიახლეები მთავარი გვერდისთვის
    public function LastBlog(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*სიახლის დამატება ბაზაში*/
    public function SaveBlog($blog_post,$UpImage){

        $blog = new BlogModule;

        $blog->menu_id         =    $blog_post['menu_id'];

        $blog->image           =    "files/blog/".$UpImage;
        $blog->tumb            =    "files/blog/tumb/".$UpImage;
        $blog->video            =   $blog_post['video'];

        $blog->date            =    Carbon::now()->toDayDateTimeString();
        $blog->main            =    $blog_post['main'];

        $blog->title_ge        =    $blog_post['title_ge'];
        $blog->title_en        =    $blog_post['title_en'];
        $blog->title_ru        =    $blog_post['title_ru'];

        $blog->short_text_ge   =    $blog_post['short_text_ge'];
        $blog->short_text_en   =    $blog_post['short_text_en'];
        $blog->short_text_ru   =    $blog_post['short_text_ru'];

        $blog->full_text_ge    =    $blog_post['full_text_ge'];
        $blog->full_text_en    =    $blog_post['full_text_en'];
        $blog->full_text_ru    =    $blog_post['full_text_ru'];

        $blog->description_ge  =    $blog_post['description_ge'];
        $blog->description_en  =    $blog_post['description_en'];
        $blog->description_ru  =    $blog_post['description_ru'];

        $blog->keywords_ge     =    $blog_post['keywords_ge'];
        $blog->keywords_en     =    $blog_post['keywords_en'];
        $blog->keywords_ru     =    $blog_post['keywords_ru'];

        $blog->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateBlog($blog_post,$UpImage){

        $blog = $this->find($blog_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $blog->image          =    "files/blog/".$UpImage;
            $blog->tumb           =    "files/blog/tumb/".$UpImage;
        }
        $blog->video            =   $blog_post['video'];

        $blog->menu_id        =    $blog_post['menu_id'];

        $blog->date           =    Carbon::now()->toDayDateTimeString();
        $blog->main           =    $blog_post['main'];

        $blog->title_ge       =    $blog_post['title_ge'];
        $blog->title_en       =    $blog_post['title_en'];
        $blog->title_ru       =    $blog_post['title_ru'];

        $blog->short_text_ge  =    $blog_post['short_text_ge'];
        $blog->short_text_en  =    $blog_post['short_text_en'];
        $blog->short_text_ru  =    $blog_post['short_text_ru'];

        $blog->full_text_ge   =    $blog_post['full_text_ge'];
        $blog->full_text_en   =    $blog_post['full_text_en'];
        $blog->full_text_ru   =    $blog_post['full_text_ru'];

        $blog->description_ge =    $blog_post['description_ge'];
        $blog->description_en =    $blog_post['description_en'];
        $blog->description_ru =    $blog_post['description_ru'];

        $blog->keywords_ge    =    $blog_post['keywords_ge'];
        $blog->keywords_en    =    $blog_post['keywords_en'];
        $blog->keywords_ru    =    $blog_post['keywords_ru'];

        $blog->save();
    }


    /*სიახლის წაშლა ბაზიდან*/
    public function DeleteBlog($blog_id){
        $blog_item = $this->find($blog_id);
        $blog_item->delete();
        return  array('image'=>$blog_item->image, 'tumb'=>$blog_item->tumb, 'menu_id'=>$blog_item->menu_id);
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
