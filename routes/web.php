<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');

Route::post('query', 'QueryController@search')->name('search');


Route::get('busqueda', function () {
    return view('busqueda');
});