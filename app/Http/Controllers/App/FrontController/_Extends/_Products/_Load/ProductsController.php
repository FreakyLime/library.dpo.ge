<?php
namespace App\Http\Controllers\App\FrontController\_Extends\_Products\_Load;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\_Extends\_Products\Products;
use App\Models\App\FrontModels\_Addons\_Aromats\Aromats;
use App\Models\App\BackModels\Navigation\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProductsController extends MainController
{

    public  function index(Products $products, Aromats $aromats){

        /*პროდუქცია კატეგორიის მიხედვით*/
        $this->data["PageProd"]      =  $products->GetPageProd();
        $this->data["Aromats"]       =  $aromats->AllAromats();

        $this->data["show"]          =  1;

        return view('Web._Special._Products._ProductsLoad.ProductsLoad', $this->data );
    }
}