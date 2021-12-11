<?php



Auth::routes(['verify'=>true]);
Route::get("/home", "HomeController@index")->name('home')->middleware("verified");
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get("/", function(){
    return "Home";
});
Route::get("/dashboard", function(){
   return "dashboard";
});
