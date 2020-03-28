<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Bitfumes\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@send');
});

Route::get('check', 'ContactController@index');
