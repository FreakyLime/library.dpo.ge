<?php

namespace App\Http\Controllers\App\FrontController\_Extends\_Cart;
use App\Http\Controllers\MainController;

use App\Models\App\FrontModels\_Extends\_Products\Products;

use Cart;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\LaravelLocalization;

use App\Http\Requests;

class CartController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cart::destroy();
        $cartItems = Cart::content();
        $this->data[''] = '';
        return view('Web._Cart.Cart', compact('cartItems'), $this->data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //ახალი ნივთის დამატება
    public function edit($id)
    {
        //ენის განსაზღვრა
        $lang_detector = new LaravelLocalization();

        /*პროდუქტის მოძებნა id-ის მეშვეობით და თანხის მინიჭება (ფასდაკლება ან ჩვეულებრივი ფასი)*/
        $product = Products::find($id);
        if($product->sale_price > 0) $price = $product->sale_price;
        else $price = $product->price;

        Cart::add(
            [
                'id' => $id,
                'name' => $product['title_'.$lang_detector->setLocale()],
                'qty' => 1,
                'price' => $price,
                    'options' =>
                        [
                            'image' => $product->image
                        ]
            ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Cart::update($request->rowId, $request->qty); // Will update the quantity
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
