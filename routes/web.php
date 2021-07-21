<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//////////////////////////////////////////////////////////////////////////////////////////////// Auth routes
Auth::routes();

//////////////////////////////////////////////////////////////////////////////////////////////// Back Office Route
Route::get('/', 'PagesController@index');
Route::get('/profil', 'PagesController@profil');
Route::get('/user', 'PagesController@user');
Route::get('/plan-de-vol', 'PagesController@plan_vol');
Route::get('/facturation', 'PagesController@facturation');
Route::get('/bip', 'PagesController@bip');
Route::get('/dossier-meteo', 'PagesController@dossier_meteo');
Route::get('/dossier-de-vol', 'PagesController@dossier_vol');
Route::get('/roles', 'PagesController@roles');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


