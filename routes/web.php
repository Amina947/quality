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
Route::get('/dashboard', function () {
    return view('home');
});


Route::get('/loginn', 'HomePageController@showHomepage');
Route::get('/left-sidebar', 'LeftPageController@showLeftpage');
Route::get('/right-sidebar', 'RightPageController@showRightpage');
Route::get('/no-sidebar', 'NoSidebarPageController@showNoSidebarpage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
