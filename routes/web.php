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

Route::get('/home', 'HomeController@index')->name('home');

Route::model('households', 'Household');
Route::model('chores', 'Chore');
Route::resource('households', 'HouseholdsController', [
    'only' => ['index', 'show'],
//    'middleware' => ['auth']
]);
Route::resource('households.chores', 'ChoresController', [
    'only' => ['index', 'show', 'store'],
//    'middleware' => ['auth']
]);