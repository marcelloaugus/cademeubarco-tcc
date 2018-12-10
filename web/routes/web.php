<?php

Route::get('/',['as' => 'site.home', 'uses' => 'Site\HomeController@index']);