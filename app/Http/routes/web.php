<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|Website Routes
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', ['as' => 'main', 'uses' => 'App\FrontController\Mainpage\MainPageController@WebInfoType']);


        Route::get('/contact', ['as' => 'contact', 'uses' => 'App\FrontController\Specials\_Contact\ContactController@index']);

        Route::get('menu/{id}', ['as' => 'menu_loader', 'uses' => 'App\FrontController\Loader\LoaderController@index']);

        Route::get('news/{id}', ['as' => 'menu_view', 'uses' => 'App\FrontController\Details\News\NewsController@index']);
        Route::get('album/{id}', ['as' => 'album_view', 'uses' => 'App\FrontController\Details\Album\AlbumController@index']);
        Route::get('video/{id}', ['as' => 'video_view', 'uses' => 'App\FrontController\Details\Video\VideoController@index']);
        Route::get('slider/{id}', ['as' => 'slider_view', 'uses' => 'App\FrontController\Details\Slider\SliderController@index']);
        Route::get('search/{search}', ['as' => 'search_view', 'uses' => 'App\FrontController\Loader\LoaderController@search']);

        /*^^^სერვისების როუტინგი^^^*/

        /*სერვისების სია*/
        Route::get('services/', ['as' => 'all_services', 'uses' => 'App\FrontController\_Addons\_Services\ServicesController@index']);

        /*სერვისების სია კატეგორიის მიხედვით*/
        Route::get('services/view/{id}', ['as' => 'services_category', 'uses' => 'App\FrontController\_Addons\_Services\ServicesController@Load']);

        /*კონკრეტული სერვისის წაკითხვა*/
        Route::get('services/reed/{id}', ['as' => 'services_reed', 'uses' => 'App\FrontController\_Addons\_Services\ServicesController@Reed']);

        /*^^^სერვისების როუტინგი^^^*/

        /*პროდუქცის სია კატეგორიის მიხედვით*/
        Route::get('products/', ['as' => 'products_load', 'uses' => 'App\FrontController\_Extends\_Products\_Load\ProductsController@index']);
        /*კონკრეტული პროდუქციის წაკითხვა*/
        Route::get('product/item/{id}', ['as' => 'product_item', 'uses' => 'App\FrontController\_Extends\_Products\_View\ProductItemController@index']);

        /*პროდუქცის სია კატეგორიის მიხედვით*/
        Route::get('sales/', ['as' => 'sales_load', 'uses' => 'App\FrontController\_Extends\_Sales\_Load\SalesController@index']);
        /*კონკრეტული პროდუქციის წაკითხვა*/
        Route::get('sale/item/{id}', ['as' => 'sale_item', 'uses' => 'App\FrontController\_Extends\_Sales\_View\SaleItemController@index']);

        //Shopping Cart
        //კალათის ჩამოტვირთვა
        Route::get('cart/', ['as' => 'cart', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@index']);

        Route::get('cart/create/{id}', ['as' => 'cart_create', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@create']);
        Route::post('cart/store/', ['as' => 'cart_store', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@store']);
        Route::get('cart/show/{id}', ['as' => 'cart_show', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@show']);

        //ახალი ნივთის დამატება
        Route::get('cart/edit/{id}', ['as' => 'cart_edit', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@edit']);

        //ნივთის განახლება
        Route::post('cart/update', ['as' => 'cart_update', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@update']);

        //ნივთის წაშლა
        Route::get('cart/destroy/{id}', ['as' => 'cart_destroy', 'uses' => 'App\FrontController\_Extends\_Cart\CartController@destroy']);

        /*შეკვეთის მეილით გაგზავნა*/
        Route::post('cart/order', ['as' => 'cart_order', 'uses' => 'App\FrontController\Specials\_Mail\MailController@sendEmail']);

    });
