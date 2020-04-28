<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|Website Routes
*/


require(app_path() . '/Http/routes/web.php');
require(app_path() . '/Http/routes/admin.php');
require(app_path() . '/Http/routes/Admin/Store/store.php');
require(app_path() . '/Http/routes/Admin/Blog/blog.php');

/*დამატებითი მოდულები არასტანდარტული საიტისთვის ADMIN*/
require(app_path() . '/Http/routes/Admin/Helpers/helpers.php');
require(app_path() . '/Http/routes/Admin/Helpers/services.php');
require(app_path() . '/Http/routes/Admin/Helpers/team.php');
require(app_path() . '/Http/routes/Admin/Helpers/events.php');
require(app_path() . '/Http/routes/Admin/Helpers/campaigns.php');



/*დამატებითი მოდულები არასტანდარტული საიტისთვის WEB*/
require(app_path() . '/Http/routes/Web/Blog/blog.php');

require(app_path() . '/Http/routes/Web/Helpers/campaigns.php');
require(app_path() . '/Http/routes/Web/Helpers/teams.php');
require(app_path() . '/Http/routes/Web/Helpers/events.php');


Route::auth();

Route::get('/home', 'HomeController@index');