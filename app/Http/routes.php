<?php

// Send to pages controller on method about
Route::get('/', 'PagesController@about');
Route::get('contact', 'PagesController@contact');