<?php


    Route::match(['get','post'],'/','AdminController@login');
    Route::get('/logout','AdminController@logout');

    Route::group(['middleware'=>['admin']], function (){
        Route::get('/dashboard','AdminController@dashboard');
        Route::resource('/catalogs','CatalogsController');
    });

?>
