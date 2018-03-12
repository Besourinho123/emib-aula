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

Route::get('/', 'AlunosController@index');
Route::get('/cadastro', 'AlunosController@create');
Route::post('/salva', 'AlunosController@save');

Route::get('/prof', 'TeacherController@index');
Route::get('/cad', 'TeacherController@create');
Route::post('/save', 'TeacherController@save');

Route::post('/editar/{dados}', 'TeacherController@edit');
Route::post('/update', 'TeacherController@update');
Route::post('/delete/{dados}', 'TeacherController@delete');




