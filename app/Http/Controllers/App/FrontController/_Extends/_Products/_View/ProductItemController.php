<?php
namespace App\Http\Controllers\App\FrontController\_Extends\_Products\_View;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\_Extends\_Products\Products;
use Illuminate\Http\Request;
use App\Http\Requests;


class ProductItemController extends MainController
{

    public  function index($item_id, Products $products){

        /*კონკრეტული პროდუქციის წაკითხვა ID-ის მიხედვით*/
        $this->data["ProductItem"] = $products->GetProductItem($item_id);
        /*მსგავსი პროდუქციის წაკითხვა*/
        $this->data["GetLikeProd"] = $products->GetLikeProd($item_id,$this->data["ProductItem"]['menu_id']);

        return view('Web._Special._Products._ProductsView.ProductItem', $this->data );
    }
}