<?php

use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/apropos', 'AProposController@index');

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');
Route::get('/user/delete', 'UserController@delete');

Route::get('/timbre/create', 'TimbreController@create');
Route::post('/timbre/create', 'TimbreController@store');
Route::get('/timbre', 'TimbreController@index');
Route::get('/timbre/show', 'TimbreController@show');
Route::get('/timbre/edit', 'TimbreController@edit');
Route::post('/timbre/edit', 'TimbreController@update');
Route::get('/timbre/delete', 'TimbreController@delete');


Route::get('/enchere/show', 'EnchereController@show');
Route::get('/enchere/create', 'EnchereController@create');
Route::post('/enchere/create', 'EnchereController@store');
Route::get('/catalogue', 'EnchereController@index');

Route::post('/miser/store', 'MiseController@store');


Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');

Route::dispatch();
