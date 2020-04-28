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

        /*სერვისების სია კატეგორიის მიხედვით*/
        Route::get('events/view/{id}', ['as' => 'events_view', 'uses' => 'App\FrontController\_Addons\_Events\EventsController@View']);


    });
