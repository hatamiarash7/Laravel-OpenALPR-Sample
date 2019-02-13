<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', 'DemoController@demo')->name('demo');
