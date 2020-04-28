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

        /*ბლოგი ყველა კატეგორიიდან*/
        Route::get('blog', ['as' => 'all_blog', 'uses' => 'App\FrontController\_Extends\_Blog\_Load\BlogController@index']);
        /*ბლოგი კონკრეტული კატეგორია*/
        Route::get('blog/load/{id}', ['as' => 'blog_load', 'uses' => 'App\FrontController\_Extends\_Blog\_Load\BlogController@Load']);
        /*ბლოგის პოსტის წაკითხვა*/
        Route::get('blog/view/{id}', ['as' => 'blog_view', 'uses' => 'App\FrontController\_Extends\_Blog\_View\BlogViewController@index']);

    });
