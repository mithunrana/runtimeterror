<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','HomePageController@index');
Route::get('/frequently-asked-questions','HomePageController@faq');
Route::get('/login','HomePageController@login');
Route::get('/signup','HomePageController@signup');
Route::get('/privacy-policy','HomePageController@privacypolicy');
Route::get('/about-us','HomePageController@aboutus');
Route::get('/contact-us','HomePageController@contactus');
Route::get('/product-veiw','HomePageController@productView');
Route::get('/how-to-buy','HomePageController@howToBuy');
Route::get('/bn','HomePageController@translate');
Route::get('/jualiary','HomePageController@productbyCategory');
Route::get('/term-and-conditions','HomePageController@termCondition');
Route::get('/product-compare','HomePageController@productCompare');