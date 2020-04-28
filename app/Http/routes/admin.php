<?php


/** --------------------------- ADMIN ROUTES ---------------------------- **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['Admin','localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {
        /*მთავარი ადმინის გვერდი*/
        Route::get('admin/', ['as' => 'admin_main', 'uses' => 'App\BackControllers\AdminIndexController@index']);

        /*
        |--------------------------------------------------------------------------
        | მენიუს მართვა (შექმნა, რედაქტირება, გადაადგილება, წაშლა)
        |--------------------------------------------------------------------------
        |
        */
        Route::get('admin/build_menu', ['as' => 'manage_menu', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@getIndex']);
        Route::post('admin/build_menu/reorder', ['as' => 'manage_menu_reorder', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@postIndex']);

        Route::get('admin/build_menu/show/{id}', ['as' => 'manage_menu_show', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@show']);
        Route::get('admin/build_menu/hide/{id}', ['as' => 'manage_menu_hide', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@hide']);

        Route::post('admin/build_menu/new', ['as' => 'manage_menu_new', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@postNew']);
        Route::post('admin/build_menu/delete', ['as' => 'manage_menu_delete', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@postDelete']);


        Route::get('admin/build_menu/edit/{id}', ['as' => 'manage_menu_get_edit', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@getEdit']);
        Route::post('admin/build_menu/edit/', ['as' => 'manage_menu_post_edit', 'uses' => 'App\BackControllers\MenuManager\MenuBuilderController@postEdit']);

        /*
        |--------------------------------------------------------------------------
        | კატეგორიების მართვა (შექმნა, რედაქტირება, გადაადგილება, წაშლა)
        |--------------------------------------------------------------------------
        |
        */
        Route::get('admin/build_category', ['as' => 'manage_category', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@getIndex']);
        Route::post('admin/build_category/reorder', ['as' => 'manage_category_reorder', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@postIndex']);

        Route::get('admin/build_category/show/{id}', ['as' => 'manage_category_show', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@show']);
        Route::get('admin/build_category/hide/{id}', ['as' => 'manage_category_hide', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@hide']);

        Route::post('admin/build_category/new', ['as' => 'manage_category_new', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@postNew']);
        Route::post('admin/build_category/delete', ['as' => 'manage_category_delete', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@postDelete']);


        Route::get('admin/build_category/edit/{id}', ['as' => 'manage_category_get_edit', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@getEdit']);
        Route::post('admin/build_category/edit/', ['as' => 'manage_category_post_edit', 'uses' => 'App\BackControllers\CategoryManeger\CategoryBuilderController@postEdit']);

        /*
       |--------------------------------------------------------------------------
       | სეთინგების როუტები მაგ: ლოგო, საიტის დასახელება, სოციალური ქსელები საკონტაკტო ინფორმაცია და სხვა.
       |--------------------------------------------------------------------------
       |[
       */

        Route::post('admin/update_logo_website_title', ['as' => 'update_logo_website_title', 'uses' => 'App\BackControllers\Settings\SettingsController@TitleUpdateImage']);
        Route::post('admin/onn_off_lang', ['as' => 'onn_off_lang', 'uses' => 'App\BackControllers\Settings\SettingsController@OnOffLang']);
        Route::get('admin/settings', ['as' => 'settings', 'uses' => 'App\BackControllers\Settings\SettingsController@index']);
        Route::post('admin/settings/update_loop', ['as' => 'settings_update_loop', 'uses' => 'App\BackControllers\Settings\SettingsController@UpdateSettingsByLoop']);
        Route::get('admin/translate', ['as' => 'translate', 'uses' => 'App\BackControllers\Translations\TranslationsController@index']);


        Route::get('admin/static_images', ['as' => 'static_images', 'uses' => 'App\BackControllers\Settings\SettingsController@StaticImages']);
        Route::post('admin/update_event', ['as' => 'update_event', 'uses' => 'App\BackControllers\Settings\SettingsController@UpdateEventBg']);
        Route::post('admin/update_page', ['as' => 'update_page', 'uses' => 'App\BackControllers\Settings\SettingsController@UpdatePageBg']);
        Route::post('admin/update_campaign', ['as' => 'update_campaign', 'uses' => 'App\BackControllers\Settings\SettingsController@UpdateCampaignBg']);
        //-------------------------------------------------------]

        /*
        |--------------------------------------------------------------------------
        | მოდულების სია, ინფორმაციის ჩამოტვირთვა, ინფორმაციის დამატება მაგ: სიახლე, ალბომი, ვიდეო, და ა.შ.
        |--------------------------------------------------------------------------
        |[
        */
        Route::get('admin/module_manager', ['as' => 'module_manager', 'uses' => 'App\BackControllers\ModuleManager\ModuleManagerController@index']);
        Route::get('admin/module_manager/menu/{id}', ['as' => 'module_manager_menu', 'uses' => 'App\BackControllers\ModuleManager\ModuleManagerController@Load']);
        //-------------------------------------------------------]

        /********* სიახლის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/news_module/list/{id}', ['as' => 'news_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/news_module/create_news/{id}', ['as' => 'create_news', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@CreateNews']);
        //---> შენახვა <----
        Route::post('admin/news_module/news_post_save', ['as' => 'news_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@SaveNews']);
        //---> რედაქტირება <----
        Route::get('admin/news_module/edit_news/{id}', ['as' => 'edit_news', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@EditNews']);
        //---> განახლება <----
        Route::post('admin/news_module/news_post_update', ['as' => 'news_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@UpdateNews']);
        //---> წაშლა <----
        Route::get('admin/news_module/delete_news/{id}', ['as' => 'delete_news', 'uses' => 'App\BackControllers\ModuleManager\Modules\NewsModuleController@DeleteNews']);
        /********* სიახლის მოდული *********/

        /********* ალბომის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/album_module/list/{id}', ['as' => 'album_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/album_module/create_album/{id}', ['as' => 'create_album', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@CreateAlbum']);
        //---> შენახვა <----
        Route::post('admin/album_module/album_post_save', ['as' => 'album_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@SaveAlbum']);
        //---> რედაქტირება <----
        Route::get('admin/album_module/edit_album/{id}', ['as' => 'edit_album', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@EditAlbum']);
        //---> განახლება <----
        Route::post('admin/album_module/album_post_update', ['as' => 'album_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@UpdateAlbum']);
        //---> წაშლა <----
        Route::get('admin/album_module/delete_album/{id}', ['as' => 'delete_album', 'uses' => 'App\BackControllers\ModuleManager\Modules\AlbumModuleController@DeleteAlbum']);
        /********* ალბომის მოდული *********/

        /********* გალერიის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/gallery_module/list/{id}', ['as' => 'gallery_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/gallery_module/create_gallery/{id}', ['as' => 'create_gallery', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@CreateGallery']);
        //---> შენახვა <----
        Route::post('admin/gallery_module/gallery_post_save', ['as' => 'gallery_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@SaveGallery']);
        //---> რედაქტირება <----
        Route::get('admin/gallery_module/edit_gallery/{id}', ['as' => 'edit_gallery', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@EditGallery']);
        //---> განახლება <----
        Route::post('admin/gallery_module/gallery_post_update', ['as' => 'gallery_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@UpdateGallery']);
        //---> წაშლა <----
        Route::get('admin/gallery_module/delete_gallery/{id}', ['as' => 'delete_gallery', 'uses' => 'App\BackControllers\ModuleManager\Modules\GalleryModuleController@DeleteGallery']);
        /********* გალერიის მოდული *********/

        /********* ვიდეოს მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/videos_module/list/{id}', ['as' => 'videos_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/videos_module/create_videos/{id}', ['as' => 'create_videos', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@CreateVideos']);
        //---> შენახვა <----
        Route::post('admin/videos_module/videos_post_save', ['as' => 'videos_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@SaveVideos']);
        //---> რედაქტირება <----
        Route::get('admin/videos_module/edit_videos/{id}', ['as' => 'edit_videos', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@EditVideos']);
        //---> განახლება <----
        Route::post('admin/videos_module/videos_post_update', ['as' => 'videos_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@UpdateVideos']);
        //---> წაშლა <----
        Route::get('admin/videos_module/delete_videos/{id}', ['as' => 'delete_videos', 'uses' => 'App\BackControllers\ModuleManager\Modules\VideosModuleController@DeleteVideos']);
        /********* ვიდეოს მოდული *********/

        /********* სლაიდერის მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/slider_module/list/{id}', ['as' => 'slider_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/slider_module/create_slider/{id}', ['as' => 'create_slider', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@CreateSlider']);
        //---> შენახვა <----
        Route::post('admin/slider_module/slider_post_save', ['as' => 'slider_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@SaveSlider']);
        //---> რედაქტირება <----
        Route::get('admin/slider_module/edit_slider/{id}', ['as' => 'edit_slider', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@EditSlider']);
        //---> განახლება <----
        Route::post('admin/slider_module/slider_post_update', ['as' => 'slider_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@UpdateSlider']);
        //---> წაშლა <----
        Route::get('admin/slider_module/delete_slider/{id}', ['as' => 'delete_slider', 'uses' => 'App\BackControllers\ModuleManager\Modules\SliderModuleController@DeleteSlider']);
        /********* სლაიდერის მოდული *********/

        /********* ბანერების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/banner_module/list/{id}', ['as' => 'banner_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/banner_module/create_banner/{id}', ['as' => 'create_banner', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@CreateBanner']);
        //---> შენახვა <----
        Route::post('admin/banner_module/banner_post_save', ['as' => 'banner_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@SaveBanner']);
        //---> რედაქტირება <----
        Route::get('admin/banner_module/edit_banner/{id}', ['as' => 'edit_banner', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@EditBanner']);
        //---> განახლება <----
        Route::post('admin/banner_module/banner_post_update', ['as' => 'banner_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@UpdateBanner']);
        //---> წაშლა <----
        Route::get('admin/banner_module/delete_banner/{id}', ['as' => 'delete_banner', 'uses' => 'App\BackControllers\ModuleManager\Modules\BannerModuleController@DeleteBanner']);
        /********* ბანერების მოდული *********/

        /********* ტექსტის მოდული *********/
        Route::get('admin/text_module/list/{id}', ['as' => 'view_text', 'uses' => 'App\BackControllers\ModuleManager\Modules\TextModuleController@LoadText']);
        Route::post('admin/text_module/create_text', ['as' => 'create_text', 'uses' => 'App\BackControllers\ModuleManager\Modules\TextModuleController@CreateText']);
        Route::post('admin/text_module/update_text', ['as' => 'update_text', 'uses' => 'App\BackControllers\ModuleManager\Modules\TextModuleController@UpdateText']);
        /********* ტექსტის მოდული *********/

        /********* დამატებითი სურათების მოდული *********/
        //---> შენახვა <----
        Route::post('admin/more_images_module/more_images_post_save', ['as' => 'more_images_add', 'uses' => 'App\BackControllers\ModuleManager\Modules\MoreImagesController@SaveMoreImages']);
        Route::get('admin/more_images/delete_image/{table}/{item}/{img_id}', ['as' => 'delete_image', 'uses' => 'App\BackControllers\ModuleManager\Modules\MoreImagesController@DeleteImage']);
        /********* დამატებითი სურათების მოდული *********/

        /*მენიუს მართვა XXXXXXXXXXX*/
        Route::get('admin/manage_menu', ['as' => 'manage_menu', 'uses' => 'App\BackControllers\MenuManager\MenuManagerController@index']);
        Route::post('admin/reorder_menu', ['as' => 'reorder_menu', 'uses' => 'App\BackControllers\MenuManager\MenuManagerController@Reorder']);


    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


