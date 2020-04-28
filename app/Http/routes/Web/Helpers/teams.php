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
        Route::get('teams/', ['as' => 'all_teams', 'uses' => 'App\FrontController\_Addons\_Teams\TeamsController@Load']);

        /*სერვისების სია კატეგორიის მიხედვით*/
        Route::get('teams/view/{id}', ['as' => 'teams_category', 'uses' => 'App\FrontController\_Addons\_Teams\TeamsController@View']);


    });
