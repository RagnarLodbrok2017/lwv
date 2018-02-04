<?php


//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/',"HomeController");
Route::get('/film/{id}', 'HomeController@GetFilmByid');