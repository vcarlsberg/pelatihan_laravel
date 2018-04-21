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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('todo',function()
{
    return 'todo list';
});

Route::get('todo',function()
{
    return view('todo');
});

Route::get('coba',function()
{
    return view('coba');
});

Route::get('todo2',function()
{
    $list['todos']=array('A','B','C','D');
    return view('todo',$list);
});

Route::get('makanan','MakananController@index');

Route::get('todo','TodoController@index');
Route::get('todo/create','TodoController@create');
Route::post('todo','TodoController@store');

Route::get('category','CategoryController@index');
Route::get('category/create','CategoryController@create');
Route::post('category','CategoryController@store');

Route::get('user','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user','UserController@store');