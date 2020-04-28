<?php
namespace App\Http\Controllers\App\FrontController\_Extends\_Sales\_View;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\_Extends\_Sales\Sales;
use Illuminate\Http\Request;
use App\Http\Requests;


class SaleItemController extends MainController
{

    public  function index($item_id, Sales $sales){

        /*კონკრეტული ფასდაკლების წაკითხვა ID-ის მიხედვით*/
        $this->data["SaleItem"] = $sales->GetSaleItem($item_id);
        /*მსგავსი ფასდაკლების წაკითხვა*/
        $this->data["GetLikeSales"] = $sales->GetLikeSales($item_id,$this->data["SaleItem"]['menu_id']);

        return view('Web._Special._Sales._SalesView.SaleItem', $this->data );
    }
}