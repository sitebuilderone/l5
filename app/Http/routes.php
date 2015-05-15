<?php

// Send to pages controller on method about
Route::get('/', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Register the route	
Route::get('articles', 'ArticlesController@index'); 
Route::get('articles/{id}', 'ArticlesController@show'); 


