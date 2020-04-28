<?php
namespace App\Http\Controllers\App\FrontController\Specials\_Contact;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use App\Http\Requests;


class ContactController extends MainController
{

    public  function index(){

        /*
        |--------------------------------------------------------------------------
        |
        |--------------------------------------------------------------------------
        */
        return view('App.FrontBlades.Specials._Contact.'.$this->data['TS']['contact_page'].'.Contact', $this->data );
    }
}