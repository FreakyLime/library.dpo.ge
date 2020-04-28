<?php

namespace App\Models\App\BackModels\_Addons\Helpers\Reply;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ReplyModel extends Model
{
    protected $table = "Reply";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*გამოხმაურების წაკითხვა ID-ს მიხედვით*/
    public function GetReply($menu_id){

        return $this->where('menu_id',$menu_id)->get();
    }

    public function ReplyById($reply_item_id){
        return $this->where('id', $reply_item_id)->first();
    }

    //ბოლო გამოხმაურების მთავარი გვერდისთვის
    public function LastReply(){
        return $this->take(5)->orderBy('id','desc')->get();
    }

    /*გამოხმაურების დამატება ბაზაში*/
    public function SaveReply($reply_post,$UpImage){

        $reply = new ReplyModel;

        $reply->menu_id         =    $reply_post['menu_id'];

        $reply->image           =    "files/reply/".$UpImage;
        $reply->tumb           =     "files/reply/tumb/".$UpImage;

        $reply->date            =    Carbon::now()->toDayDateTimeString();

        $reply->title_ge        =    $reply_post['title_ge'];
        $reply->title_en        =    $reply_post['title_en'];
        $reply->title_ru        =    $reply_post['title_ru'];

        $reply->short_text_ge   =    $reply_post['short_text_ge'];
        $reply->short_text_en   =    $reply_post['short_text_en'];
        $reply->short_text_ru   =    $reply_post['short_text_ru'];


        $reply->full_text_ge   =    $reply_post['full_text_ge'];
        $reply->full_text_en   =    $reply_post['full_text_en'];
        $reply->full_text_ru   =    $reply_post['full_text_ru'];

        $reply->save();
    }

    /*გამოხმაურების რედაქტირება ბაზაში*/
    public function UpdateReply($reply_post,$UpImage){

        $reply = $this->find($reply_post['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if(!empty($UpImage)){
            $reply->image          =    "files/reply/".$UpImage;
            $reply->tumb           =    "files/reply/tumb/".$UpImage;
        }

        $reply->menu_id        =    $reply_post['menu_id'];
        
        $reply->date           =    Carbon::now()->toDayDateTimeString();

        $reply->title_ge       =    $reply_post['title_ge'];
        $reply->title_en       =    $reply_post['title_en'];
        $reply->title_ru       =    $reply_post['title_ru'];

        $reply->short_text_ge  =    $reply_post['short_text_ge'];
        $reply->short_text_en  =    $reply_post['short_text_en'];
        $reply->short_text_ru  =    $reply_post['short_text_ru'];

        $reply->full_text_ge   =    $reply_post['full_text_ge'];
        $reply->full_text_en   =    $reply_post['full_text_en'];
        $reply->full_text_ru   =    $reply_post['full_text_ru'];

        $reply->save();
    }


    /*გამოხმაურების წაშლა ბაზიდან*/
    public function DeleteReply($reply_id){
        $reply_item = $this->find($reply_id);
        $reply_item->delete();
        return  array('image'=>$reply_item->image, 'tumb'=>$reply_item->tumb, 'menu_id'=>$reply_item->menu_id);
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
