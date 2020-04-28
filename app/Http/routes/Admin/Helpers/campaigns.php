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
        Route::get('admin/campaigns/{id}', ['as' => 'load_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_campaign_item/{id}', ['as' => 'create_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@CreateItems']);
        //---> შენახვა <----
        Route::post('admin/save_campaign_item', ['as' => 'save_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@SaveItems']);
        //---> რედაქტირება <----
        Route::get('admin/edit_campaign_item/{id}', ['as' => 'edit_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@EditItems']);
        //---> განახლება <----
        Route::post('admin/update_campaign_item', ['as' => 'update_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@UpdateItems']);
        //---> წაშლა <----
        Route::get('admin/delete_campaign_item/{id}', ['as' => 'delete_campaign_item', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsController@DeleteItems']);

        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/campaign_images/save', ['as' => 'campaign_images_add', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsImagesController@SaveMoreImages']);
        Route::get('admin/campaign_images/delate/{campaign_id}/{img_id}', ['as' => 'campaign_images_delate', 'uses' => 'App\BackControllers\_Addons\_Helpers\Campaigns\CampaignsImagesController@DeleteImage']);

        /********* სერვისების მოდული *********/

    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


