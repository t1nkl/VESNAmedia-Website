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

// Backpack\NewsCRUD === Default
CRUD::resource('article', 'ArticleCrudController');
CRUD::resource('category', 'CategoryCrudController');
CRUD::resource('tag', 'TagCrudController');

// Backpack\CRUD === Created
CRUD::resource('journal/category', 'JournalCategoryCrudController');
CRUD::resource('journal/article', 'JournalArticleCrudController');
CRUD::resource('journal/contact', 'JournalContactCrudController');
CRUD::resource('journals', 'JournalCrudController');

CRUD::resource('experts', 'ExpertCrudController');

CRUD::resource('gallery', 'GalleryCrudController');
Route::post('gallery-dropzone', ['uses' => 'GalleryCrudController@DropzoneUpload']);

CRUD::resource('partners', 'PartnerCrudController');
CRUD::resource('about', 'AboutCrudController');

CRUD::resource('recommend/category', 'RecommendCategoryCrudController');
CRUD::resource('recommend/article', 'RecommendArticleCrudController');
Route::post('recommend-dropzone', ['uses' => 'RecommendArticleCrudController@DropzoneUpload']);

CRUD::resource('contact', 'ContactCrudController');
CRUD::resource('lids', 'LidCrudController');

CRUD::resource('advertising', 'AdvertisingCrudController');

CRUD::resource('slider', 'SliderCrudController');
CRUD::resource('projects', 'ProjectCrudController');
CRUD::resource('seo', 'SeoCrudController');
CRUD::resource('settings', 'SettingCrudController');
