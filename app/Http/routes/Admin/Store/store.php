<?php

/** --------------------------- Store ROUTES ---------------------------- **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['Admin','localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {
        /********* პროდუქციის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/product_category/{id}', ['as' => 'product_category', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_product/{id}', ['as' => 'create_product', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@CreateProduct']);
        //---> შენახვა <----
        Route::post('admin/save_product', ['as' => 'save_product', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@SaveProduct']);
        //---> რედაქტირება <----
        Route::get('admin/edit_product/{id}', ['as' => 'edit_product', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@EditProduct']);
        //---> განახლება <----
        Route::post('admin/update_product', ['as' => 'update_product', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@UpdateProduct']);
        //---> წაშლა <----
        Route::get('admin/delete_product/{id}', ['as' => 'delete_product', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductsController@DeleteProduct']);
        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/product_images/save', ['as' => 'product_images_add', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductImagesController@SaveProductImages']);
        Route::get('admin/product_images/delate/{image_id}/{product_id}', ['as' => 'product_images_delate', 'uses' => 'App\BackControllers\_Extends\ProductsManager\ProductImagesController@DeleteImage']);
        /********* პროდუქციის მოდული *********/


        /********* ფასდაკლების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/sale_category/{id}', ['as' => 'sale_category', 'uses' => 'App\BackControllers\_Extends\SalesManager\SalesController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_sale/{id}', ['as' => 'create_sale', 'uses' => 'App\BackControllers\_Extends\SalesManager\SalesController@CreateSale']);
        //---> შენახვა <----
        Route::post('admin/save_sale', ['as' => 'save_sale', 'uses' => 'App\BackControllers\_Extends\SalesManager\SalesController@SaveSale']);
        //---> რედაქტირება <----
        Route::get('admin/edit_sale/{id}', ['as' => 'edit_sale', 'uses' => 'App\BackControllers\_Extends\SalesManager\SalesController@EditSale']);
        //---> განახლება <----
        Route::post('admin/update_sale', ['as' => 'update_sale', 'uses' => 'App\BackControllers\SalesManager\SalesController@UpdateSale']);
        //---> წაშლა <----
        Route::get('admin/delete_sale/{id}', ['as' => 'delete_sale', 'uses' => 'App\BackControllers\_Extends\SalesManager\SalesController@DeleteSale']);
        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/sale_images/save', ['as' => 'sale_images_add', 'uses' => 'App\BackControllers\_Extends\SalesManager\SaleImagesController@SaveSaleImages']);
        Route::get('admin/sale_images/delate/{image_id}/{sale_id}', ['as' => 'sale_images_delate', 'uses' => 'App\BackControllers\_Extends\SalesManager\SaleImagesController@DeleteImage']);
        /********* ფასდაკლების მოდული *********/

    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/