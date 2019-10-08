<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@Index')->name('post.index');
Route::get('/category/{id}', 'CategoriesController@show')->name('category.show');

Route::get('/post/{id}', 'PostController@show')->name('post.show');

Route::get('/admin/post/create', 'PostController@create')->name('post.create');

Route::post('/', 'PostController@store')->name('post.store');

Route::get('/admin/post/{id}/edit', 'PostController@edit')->name('post.edit');
