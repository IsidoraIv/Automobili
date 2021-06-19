<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Stranica api */
Route::get('/', 'HomepageController@kompanijeStranica');
/* Kompanije api */
Route::get('/kompanije/get', 'KompanijaController@ucitavanje');
Route::get('/kompanije/get-automobili', 'KompanijaController@automobili_kompanije');
/* Automobili api */
Route::get('/automobil/get', 'AutomobilController@ucitavanje');
Route::put('/automobil/izmena', 'AutomobilController@izmena');
Route::post('/automobil/dodavanje', 'AutomobilController@dodavanje');
Route::delete('/automobil/brisanje', 'AutomobilController@brisanje');
