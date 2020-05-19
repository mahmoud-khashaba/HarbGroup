<?php

// LARAVEL ADMIN
Route::group(['middleware' => ['web'], 'prefix' => config('laravel-admin.route_prefix'), 'namespace' => 'SystemInc\LaravelAdmin\Http\Controllers'], function () {

    // resources
    Route::get('css/{filename}', 'ResourcesController@css');
    Route::get('scripts/{filename?}', 'ResourcesController@scripts')->where('filename', '(.*)');
    Route::get('images/{filename?}', 'ResourcesController@images')->where('filename', '(.*)');
    Route::get('uploads/{filename?}', 'UploadsController@index')->where('filename', '(.*)');

    // w/o credentials
    Route::get('login', 'AdminController@getLogin');
    Route::post('login', 'AdminController@postLogin');

    // with credentials
    Route::group(['middleware' => [SystemInc\LaravelAdmin\Http\Middleware\AuthenticateAdmin::class]], function () {


        // projects 
        Route::group(['prefix' => 'projects'], function () {
            
           Route::get('', 'ProjectsController@getIndex');
        });


       //services
        Route::group(['prefix' => 'services'], function () {
           

            Route::get('menu/create', 'MenusController@getCreate');
            Route::post('menu/save', 'MenusController@postSave');
            Route::post('menu/update/{service_id}', 'MenusController@postUpdate');
            Route::get('menu/edit/{menu_id}', 'MenusController@getEdit');
            Route::get('menu/delete/{menu_id}', 'MenusController@getDelete');

           Route::get('', 'ServicesController@getIndex');

           //sub-menus
        Route::group(['prefix' => '{menu_id}/sub-menu'], function () {

             Route::get('create', 'MenusController@getSubCreate');
             Route::post('save', 'MenusController@postSubSave');

           
          });
        });

       

        // ajax
        Route::group(['prefix' => 'ajax'], function () {
            Route::post('{image_id}/change-projects-image-element-order', 'AjaxController@postChangeGalleryImageElementOrder');

            Route::post('{type}/delete-projects-images/{id}', 'AjaxController@postDeleteGalleryImages');

              Route::post('{image_id}/change-services-image-element-order', 'AjaxController@postChangeGalleryImageElementOrder');

            Route::post('{type}/delete-services-images/{id}', 'AjaxController@postDeleteGalleryImages');
            
        });

          Route::group(['prefix' => '{uri}'], function () {
           Route::post('save', 'GalleriesController@postSave');
          
            Route::post('update/{gallery_id}/{image_id?}', 'GalleriesController@postUpdate');
            Route::post('image/{gallery_id}/{image_id}', 'GalleriesController@postImageUpdate');
            Route::get('image/{gallery_id}/{image_id}', 'GalleriesController@getImage');
            Route::get('delete/{gallery_id}', 'GalleriesController@getDelete');
            Route::get('edit/{gallery_id}', 'GalleriesController@getEdit');
            Route::get('create', 'GalleriesController@getCreate');


        });

       
        // settings
        Route::group(['prefix' => 'settings'], function () {
            Route::post('create-admin', 'SettingsController@postCreateAdmin');
            Route::post('update-admin/{admin_id}', 'SettingsController@postUpdateAdmin');
            Route::post('change-password/{admin_id}', 'SettingsController@postChangePassword');
            Route::post('update', 'SettingsController@postUpdate');
            Route::get('edit/{admin_id}', 'SettingsController@getEdit');
            Route::get('add-admin', 'SettingsController@getAddAdmin');
            Route::get('', 'SettingsController@getIndex');
        });

        // admin
        Route::any('upload-tiny-image', 'AdminController@anyUploadTinyImage');
        Route::any('tiny-images', 'AdminController@anyTinyImages');
        Route::post('delete-tiny-image', 'AdminController@postDeleteTinyImage');
        Route::get('logout', 'AdminController@getLogout');
        Route::get('', 'AdminController@getIndex');
    });
});

Route::group(['middleware' => ['web'], 'prefix' => config('laravel-admin.route_prefix'), 'namespace' => 'App\Http\Controllers'], function () {
    Route::group(['middleware' => [SystemInc\LaravelAdmin\Http\Middleware\AuthenticateAdmin::class]], function () {
        if (File::exists('../routes/sla-routes.php')) {
            require app_path('../routes/sla-routes.php');
        }
    });
});
