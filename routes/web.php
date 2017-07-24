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
Route::resource('/', 'HomeController');

Route::resource('/journal', 'JournalController');
Route::get('/buy-journal', 'JournalController@buyJournal');
Route::get('/buy-journal/{slug}', 'JournalController@buyAnotherJournal');
Route::post('/buy-journal', 'JournalController@buyJournalForm');

Route::resource('/recommend', 'RecommendController');

Route::resource('/experts', 'ExpertController');

Route::resource('/gallery', 'GalleryController');
Route::get('/gallery/single', 'GalleryController@show');

Route::resource('/partners', 'PartnerController');

Route::resource('/contacts', 'ContactController');
Route::post('/subscribe', 'ContactController@subscribeLid');

Route::get('search', 'HomeController@search');
