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
        Route::get('admin/teams/{id}', ['as' => 'load_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_team_item/{id}', ['as' => 'create_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@CreateItems']);
        //---> შენახვა <----
        Route::post('admin/save_team_item', ['as' => 'save_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@SaveItems']);
        //---> რედაქტირება <----
        Route::get('admin/edit_team_item/{id}', ['as' => 'edit_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@EditItems']);
        //---> განახლება <----
        Route::post('admin/update_team_item', ['as' => 'update_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@UpdateItems']);
        //---> წაშლა <----
        Route::get('admin/delete_team_item/{id}', ['as' => 'delete_team_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamController@DeleteItems']);

        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/team_images/save', ['as' => 'team_images_add', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamImagesController@SaveMoreImages']);
        Route::get('admin/team_images/delate/{team_id}/{img_id}', ['as' => 'team_images_delate', 'uses' => 'App\BackControllers\_Addons\_Helpers\Team\TeamImagesController@DeleteImage']);

        /********* სერვისების მოდული *********/

    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


