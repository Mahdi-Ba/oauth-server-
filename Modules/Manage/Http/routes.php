<?php

Route::group(['middleware' => 'web', 'prefix' => 'manage', 'namespace' => 'Modules\Manage\Http\Controllers'], function()
{
    Route::get('/', 'ManageController@index');
});
