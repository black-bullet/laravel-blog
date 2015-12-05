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


Route::controllers(['auth' => 'Auth\AuthController']);

Route::resource('posts', 'PostController');

Route::get('/', function () {
    return view('welcome');
});

Route::filter('manage_posts', function () {
    if (!Entrust::hasRole('admin')) {
        return Redirect::to('/posts');
    }
});

Route::when('posts*', 'manage_posts', array('post', 'put', 'delete'));
Route::when('posts/create', 'manage_posts');
Route::when('posts/*/edit', 'manage_posts');
