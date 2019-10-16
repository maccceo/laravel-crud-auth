<?php

Auth::routes();
Route::get('/create', 'CatAuthController@create')->name('catAuth.create');
Route::post('/create', 'CatAuthController@store')->name('catAuth.store');

Route::get('/', 'CatController@index')->name('cat.index');
Route::get('/{id}', 'CatController@show')->name('cat.show');
// CREAZIONE
// MODIFICA
Route::get('/{id}/edit', 'CatAuthController@edit')->name('catAuth.edit');
Route::put('/{id}', 'CatAuthController@update')->name('catAuth.update');
// CANCELLAZIONE
Route::get('/{id}/delete', 'CatAuthController@destroy')->name('catAuth.delete');
