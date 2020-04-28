<?php
namespace App\Http\Controllers\App\FrontController\Details\Video;
use App\Http\Controllers\MainController;

class VideoController extends MainController
{

    public  function index(){

        /*
        |--------------------------------------------------------------------------
        |
        |--------------------------------------------------------------------------
        */


        $this->data[] = "";


        return view('Web._Pages._Video.Video', $this->data );
    }
}