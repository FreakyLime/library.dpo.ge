<?php

/** --------------------------- Store ROUTES ---------------------------- **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['Admin','localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {
        /********* ბლოგის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/blog_category/{id}', ['as' => 'blog_category', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_blog/{id}', ['as' => 'create_blog', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@CreateBlog']);
        //---> შენახვა <----
        Route::post('admin/save_blog', ['as' => 'save_blog', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@SaveBlog']);
        //---> რედაქტირება <----
        Route::get('admin/edit_blog/{id}', ['as' => 'edit_blog', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@EditBlog']);
        //---> განახლება <----
        Route::post('admin/update_blog', ['as' => 'update_blog', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@UpdateBlog']);
        //---> წაშლა <----
        Route::get('admin/delete_blog/{id}', ['as' => 'delete_blog', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogController@DeleteBlog']);
        //!!!!!!!!პროდუქტის დამატებითი სურათები
        Route::post('admin/blog_images/save', ['as' => 'blog_images_add', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogImagesController@SaveBlogImages']);
        Route::get('admin/blog_images/delate/{image_id}/{blog_id}', ['as' => 'blog_images_delate', 'uses' => 'App\BackControllers\_Extends\BlogManager\BlogImagesController@DeleteImage']);
        /********* ბლოგის მოდული *********/


    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/