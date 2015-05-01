<?php

Route::get('about','PagesController@about');

Route::get('','PagesController@home');

Route::get('yourhorses','PagesController@yourhorses');

Route::get('yourupcomingevents','PagesController@yourupcomingevents');

Route::get('yourinfo','PagesController@yourinfo');