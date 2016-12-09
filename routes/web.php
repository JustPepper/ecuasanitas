<?php

Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/nosotros', 'FrontEndController@about')->name('about');
Route::get('/planes', 'FrontEndController@plans')->name('plans');
Route::get('/servicios', 'FrontEndController@services')->name('services');
Route::get('/beneficios', 'FrontEndController@benefits')->name('benefits');
Route::get('/centros', 'FrontEndController@centers')->name('centers');
Route::get('/oficinas', 'FrontEndController@offices')->name('offices');
