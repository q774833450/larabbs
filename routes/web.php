<?php

Route::get('/', 'PagesController@root')->name('root');
Auth::routes();
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
/*
 *
 * Route::get('/users/{user}', 'UsersController@show')->name('users.show');
 * Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
 * Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
 */
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);