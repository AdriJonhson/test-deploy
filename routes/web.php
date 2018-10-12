<?php

Route::group(['middleware' => 'web', 'prefix' => '{school}'], function(){
	Route::get('/', 'UserController@index');
});