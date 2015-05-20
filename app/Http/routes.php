<?php
// Send to pages controller on method about
Route::get('/', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
/*
// Show a list of articles
Route::get('articles', 'ArticlesController@index'); 
// Create a form for an article
Route::get('articles/create', 'ArticlesController@create'); 
// Show single article
Route::get('articles/{id}', 'ArticlesController@show'); 
// Store or save a new article
Route::post('articles', 'ArticlesController@store');
// Edit an article, update or delete (CRUD)
*/
// New resource for articles and controller responsible
// generates all routes for CRUD
Route::resource('articles', 'ArticlesController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);
