<?php
namespace App\Models\App\FrontModels\MetaTags;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class MetaTags extends Model {

    protected $table = 'navigation';

    //მეტა ტეგების წაკითხვა მთავარი გვერდისთვის
    public static function MetaMain(){
        return MetaTags::find(1)->first();

    }

    //მეტა ტეგების წაკითხვა მენიუს შემთხვევაში
    public static function MetaByMenu($id){
        return MetaTags::iD($id)->first();
    }

    //მეტა ტეგების წაკითხვა დეტალური გვერდისთვის ალბომის,სიახლის, და აშ.
    public function MetaByItem($id){

    }

    /*
    | დამხმარე ფუნქციები MetaTags
    |
    */

    // სადაც ID = შემოსულ-ID-ს
    public function scopeiD($query,$id){
        $query->where(['id'=> $id]);
    }
}
