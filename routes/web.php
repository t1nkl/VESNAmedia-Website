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

// Route::get('login', function () {
//     return redirect('/admin/login');
// });
// Route::get('register', function () {
//     return redirect('/admin/register');
// });



Route::resource('/', 'HomeController');



Route::resource('/journal', 'JournalController');
Route::get('/journal/single', 'JournalController@show');
Route::get('/buy-journal', 'JournalController@buy_journal');



Route::resource('/recommend', 'RecommendController');
Route::get('/recommend/single', 'RecommendController@show');



Route::resource('/experts', 'ExpertController');



Route::resource('/gallery', 'GalleryController');
Route::get('/gallery/single', 'GalleryController@show');



Route::resource('/partners', 'PartnerController');



Route::resource('/contacts', 'ContactController');
