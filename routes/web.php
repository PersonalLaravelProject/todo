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


Route::get('/new', [
    'uses'=> 'pagesController@new'

]);

Route::get('/todos', [
    'uses'=> 'TodosController@index',
    'as' => 'todos'

]);


Route::get('/todos/delete/{id}', [
    'uses'=> 'TodosController@delete',
    'as' => 'todo.delete'
]);


Route::post('/create/todo', [
    'uses'=> 'TodosController@store'

]);


Route::get('/todos/update/{id}', [
    'uses'=> 'TodosController@update',
    'as' => 'todo.update'
]);


Route::post('/todo/save/{todos}', [
    'uses'=> 'TodosController@save',
    'as' => 'todos.save'
]);




