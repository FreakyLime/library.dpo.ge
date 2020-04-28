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

        /*სერვისების სია*/
        Route::get('campaigns/', ['as' => 'all_campaigns', 'uses' => 'App\FrontController\_Addons\_Campaigns\CampaignsController@Load']);

        /*სერვისების სია კატეგორიის მიხედვით*/
        Route::get('campaigns/view/{id}', ['as' => 'campaigns_category', 'uses' => 'App\FrontController\_Addons\_Campaigns\CampaignsController@View']);


    });
