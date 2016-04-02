<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('one-to-one', 'PagesController@oneToOne');
Route::get('one-to-many', 'PagesController@oneToMany');
Route::get('many-to-many', 'PagesController@manyToMany');
Route::get('many-through', 'PagesController@manyThrough');
Route::get('many-through/{user}', 'UsersController@gamesByUser');

Route::get('products-by-user/{user}', 'UsersController@productsByUser');
Route::get('users-by-product/{product}', 'ProductsController@usersByProduct');
