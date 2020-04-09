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


Route::get('notas','NotesController@getIndex' );

Route::get('notas/note/{id}','NotesController@getNote' );

Route::get('notas/saveNote','NotesController@getSaveNote');
Route::post('notas/saveNote','NotesController@postNote');

Route::get('notas/deleteNote/{id}','NotesController@getDeleteNote');

Route::get('notas/updateNote/{id}','NotesController@getUpdateNote');
Route::post('notas/updateNote/{id}','NotesController@postUpdateNote');
