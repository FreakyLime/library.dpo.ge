<?php

namespace App\Models\App\BackModels\_Addons\Aromats;
use Illuminate\Database\Eloquent\Model;

class Aromats extends Model
{
    protected $table = "Aromats";
    /*
    |--------------------------------------------------------------------------
    | News Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სიახლეების წასაკითხათ
    |
    */

    // პროდუქცია მთავარი გვერდისთვის
    public function AllAromats(){

        return $this->orderBy('id','desc')->get();
    }


    /*
    |--------------------------------------------------------------------------
    | News Functions
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები პროდუქციისთვის
    |
    */


}
