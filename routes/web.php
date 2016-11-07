<?php

Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/nosotros', 'FrontEndController@about')->name('about');
Route::get('/planes', 'FrontEndController@plans')->name('plans');