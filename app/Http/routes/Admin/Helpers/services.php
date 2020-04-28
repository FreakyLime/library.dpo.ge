<?php


/** --------------------------- ADMIN ROUTES ---------------------------- **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['Admin','localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {
        /********* სერვისების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/services/{id}', ['as' => 'load_services', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_service/{id}', ['as' => 'create_service', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@CreateService']);
        //---> შენახვა <----
        Route::post('admin/save_service', ['as' => 'save_service', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@SaveService']);
        //---> რედაქტირება <----
        Route::get('admin/edit_service/{id}', ['as' => 'edit_service', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@EditService']);
        //---> განახლება <----
        Route::post('admin/update_service', ['as' => 'update_service', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@UpdateService']);
        //---> წაშლა <----
        Route::get('admin/delete_service/{id}', ['as' => 'delete_service', 'uses' => 'App\BackControllers\_Addons\_Helpers\Services\ServicesController@DeleteService']);
        /********* სერვისების მოდული *********/
        /********* სერვისების მოდული კატეგორიის მიხედვით*********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/services_item/{id}', ['as' => 'load_services_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_service_item/{id}', ['as' => 'create_service_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@CreateServicesItems']);
        //---> შენახვა <----
        Route::post('admin/save_service_item', ['as' => 'save_service_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@SaveServicesItems']);
        //---> რედაქტირება <----
        Route::get('admin/edit_service_item/{id}', ['as' => 'edit_service_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@EditServicesItems']);
        //---> განახლება <----
        Route::post('admin/update_service_item', ['as' => 'update_service_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@UpdateServicesItems']);
        //---> წაშლა <----
        Route::get('admin/delete_service_item/{id}', ['as' => 'delete_service_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesItemsController@DeleteServicesItems']);
        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/services_images/save', ['as' => 'services_images_add', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesImagesController@SaveServicesMoreImages']);
        Route::get('admin/services_images/delate/{service_id}/{img_id}', ['as' => 'services_images_delate', 'uses' => 'App\BackControllers\_Addons\_Helpers\ServicesItems\ServicesImagesController@DeleteImage']);
        /********* სერვისების მოდული კატეგორიის მიხედვით*********/

    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


