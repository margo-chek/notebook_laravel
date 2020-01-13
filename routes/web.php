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

Route::get('/','UsersController@home'); //index - стартовая
Route::get('/login','UsersController@login'); // login
Route::get('/register','UsersController@register'); // register
Route::get('/main','NotesController@index'); // main - главная
Route::get("/note/create", "NotesController@create"); // /note/create
Route::get("/note/edit/{note}", "NotesController@edit"); // /note/edit/1
Route::get("/note/show/{note}", "NotesController@show"); // /note/show/1

// Route::resource("notes", "NotesController")
// Route::get('/home','HomeController@index')->name('home');
Auth::routes();
