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
Route::post("/note/create/new", "NotesController@store"); // post
Route::get("/note/edit/{note}", "NotesController@edit"); // /note/edit/1
Route::get("/note/show/{note}", "NotesController@show"); // /note/show/1
Route::get("/note/delete/{note}", "NotesController@destroy"); //delete
Route::put("/note/edit/it/{note}", "NotesController@update"); // put
// Route::put("////", "C@M")

Route::get("/notes", "NotesController@load_notes")

// Route::resource("notes", "NotesController")
// Route::get('/home','HomeController@index')->name('home');

Auth::routes();
