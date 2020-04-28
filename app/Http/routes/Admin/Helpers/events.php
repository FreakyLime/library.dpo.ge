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
        Route::get('admin/events/{id}', ['as' => 'load_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_event_item/{id}', ['as' => 'create_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@CreateItems']);
        //---> შენახვა <----
        Route::post('admin/save_event_item', ['as' => 'save_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@SaveItems']);
        //---> რედაქტირება <----
        Route::get('admin/edit_event_item/{id}', ['as' => 'edit_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@EditItems']);
        //---> განახლება <----
        Route::post('admin/update_event_item', ['as' => 'update_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@UpdateItems']);
        //---> წაშლა <----
        Route::get('admin/delete_event_item/{id}', ['as' => 'delete_event_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventController@DeleteItems']);

        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/event_images/save', ['as' => 'event_images_add', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventImagesController@SaveMoreImages']);
        Route::get('admin/event_images/delate/{event_id}/{img_id}', ['as' => 'event_images_delate', 'uses' => 'App\BackControllers\_Addons\_Helpers\Event\EventImagesController@DeleteImage']);

        /********* სერვისების მოდული *********/

    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


