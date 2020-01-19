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
// Route::get('/', function () {
// 	return view('welcome');
// }

Route::get('/','UsersController@home'); // index - стартовая
Route::get('/log','UsersController@login');
Route::get('/register','UsersController@register'); // register
Route::get('/note','NotesController@index'); // main - главная // any
Route::get("/note/create", "NotesController@create"); // /note/create // put
Route::get("/note/create/new", "NotesController@store");
Route::get("/note/edit/{note}", "NotesController@edit"); // /note/edit/1
Route::get("/note/show/{note}", "NotesController@show"); // /note/show/1
Route::get("/note/delete/{note}", "NotesController@destroy"); //delete
Route::post("/note/edit/{note}", "NotesController@update"); // там вроде два параметра

// Route::put("////", "C@M")

// Route::resource("notes", "NotesController")
// Route::get('/home','HomeController@index')->name('home');

Auth::routes();
