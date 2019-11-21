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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');

// Categories
Route::get('/categories', 'CategoriesController@index')->name('categories.index'); // we can nickname our routes... that's what i'm doing here

// Categories Add
Route::post('/addcategories', 'CategoriesController@store')->name('categories.add');



