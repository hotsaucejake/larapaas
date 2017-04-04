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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::get('/home', [
    'as' => 'home',
    'middleware' => 'role:super|admin|member',
    'uses' => 'HomeController@index',
]);

Route::get('/blank', [
    'as' => 'blank',
    'middleware' => 'role:super',
    'uses' => 'BlankController@index',
]);

Route::get('auth/azure', ['as' => 'auth/azure', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/azure/callback', ['as' => 'auth/azure/callback', 'uses' => 'Auth\LoginController@handleProviderCallback']);
