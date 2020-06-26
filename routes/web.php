<?php

use Illuminate\Support\Facades\Route;

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


Route::namespace("pagescontroller")->group(function()
{
 Route::get('/','HomeController@index')->name("home.index");

});

Auth::routes();

Route::prefix("post")->namespace("pagescontroller")->name("Pages.")->group(function()
{
Route::get('/show','HomeController@Show')->name("pages.show");
Route::get('{post}/edit','HomeController@Editpost')->name("pages.editPage");
Route::get('{post}/delete','HomeController@delete')->name("pages.delete");
Route::get('/add','HomeController@Addpost')->name("pages.addpost");
Route::post('/add','HomeController@createpost')->name("pages.createpost");
});

