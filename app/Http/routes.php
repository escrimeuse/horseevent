<?php

Route::get('about','PagesController@about');

Route::get('','PagesController@home');

Route::get('yourhorses','PagesController@yourhorses');

Route::get('yourupcomingevents','PagesController@yourupcomingevents');

Route::get('yourinfo','PagesController@yourinfo');

Route::get('yourpastevents','PagesController@yourpastevents');

Route::get('eventpage','PagesController@eventpage');

Route::get('createevent','PagesController@createevent');

Route::get('showrecord','PagesController@showrecord');