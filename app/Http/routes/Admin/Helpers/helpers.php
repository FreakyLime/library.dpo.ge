<?php


/** --------------------------- ADMIN ROUTES ---------------------------- **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['Admin','localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {

        /********* არომატების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/prod_aromats/{id}', ['as' => 'load_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_prod_aromats/{id}', ['as' => 'create_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@CreateAromats']);
        //---> შენახვა <----
        Route::post('admin/save_prod_aromats', ['as' => 'save_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@SaveAromats']);
        //---> რედაქტირება <----
        Route::get('admin/edit_prod_aromats/{id}', ['as' => 'edit_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@EditAromats']);
        //---> განახლება <----
        Route::post('admin/update_prod_aromats', ['as' => 'update_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@UpdateAromats']);
        //---> წაშლა <----
        Route::get('admin/delete_prod_aromats/{id}', ['as' => 'delete_prod_aromats', 'uses' => 'App\BackControllers\_Addons\_Helpers\Aromats\AromatsController@DeleteAromats']);
        /********* არომატების მოდული *********/



        /********* რჩევების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/advice_module/list/{id}', ['as' => 'advice_list', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@Load']);
        //---> შექმნა  <----
        Route::get('admin/advice_module/create_advice/{id}', ['as' => 'create_advice', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@CreateAdvice']);
        //---> შენახვა <----
        Route::post('admin/advice_module/advice_post_save', ['as' => 'advice_post_save', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@SaveAdvice']);
        //---> რედაქტირება <----
        Route::get('admin/advice_module/edit_advice/{id}', ['as' => 'edit_advice', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@EditAdvice']);
        //---> განახლება <----
        Route::post('admin/advice_module/advice_post_update', ['as' => 'advice_post_update', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@UpdateAdvice']);
        //---> წაშლა <----
        Route::get('admin/advice_module/delete_advice/{id}', ['as' => 'delete_advice', 'uses' => 'App\BackControllers\ModuleManager\Modules\AdviceModuleController@DeleteAdvice']);
        /********* რჩევების მოდული *********/
        
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



        /********* შეფასებების მოდული *********/
        //---> ჩამოტვირთვა <----
        Route::get('admin/reply/{id}', ['as' => 'load_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@Load']);
        //---> შექმნა  <----
        Route::get('admin/create_reply/{id}', ['as' => 'create_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@CreateReply']);
        //---> შენახვა <----
        Route::post('admin/save_reply', ['as' => 'save_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@SaveReply']);
        //---> რედაქტირება <----
        Route::get('admin/edit_reply/{id}', ['as' => 'edit_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@EditReply']);
        //---> განახლება <----
        Route::post('admin/update_reply', ['as' => 'update_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@UpdateReply']);
        //---> წაშლა <----
        Route::get('admin/delete_reply/{id}', ['as' => 'delete_reply', 'uses' => 'App\BackControllers\_Addons\_Helpers\Reply\ReplyController@DeleteReply']);
        /********* შეფასებების მოდული *********/


        /********* ჩვენს შესახების მოდული *********/
        Route::post('admin/update_about_us_cover', ['as' => 'update_about_us_cover', 'uses' => 'App\BackControllers\_Addons\_Helpers\AboutUs\AboutUsController@UpdateAboutUsCover']);

        Route::get('admin/about_us', ['as' => 'about_us', 'uses' => 'App\BackControllers\_Addons\_Helpers\AboutUs\AboutUsController@index']);
        Route::post('admin/about_us/update_loop', ['as' => 'about_us_update_loop', 'uses' => 'App\BackControllers\_Addons\_Helpers\AboutUs\AboutUsController@UpdateAboutUsByLoop']);
        /********* ჩვენს შესახების მოდული *********/



    });
/** --------------------------- ADMIN ROUTES ---------------------------- **/


