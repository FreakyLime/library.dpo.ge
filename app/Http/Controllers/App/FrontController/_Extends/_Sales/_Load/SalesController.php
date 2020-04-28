<?php
namespace App\Http\Controllers\App\FrontController\_Extends\_Sales\_Load;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\_Extends\_Sales\Sales;
use App\Models\App\BackModels\Navigation\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;


class SalesController extends MainController
{

    public  function index(Sales $sales){

        /*პროდუქცია კატეგორიის მიხედვით*/
        $this->data["PageSales"] = $sales->GetPageSales();

        return view('Web._Special._Sales._SalesLoad.SalesLoad', $this->data );
    }
}