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

Route::get('/hello', function(){
    $tasks = DB::table('tasks')->get();
    return view('hello',[
        'tasks' => $tasks
    ]);
});

Route::get('/greet/{name}', function ($name) {
    return view('greet')->with('name', $name);
});

Route::get('/task/{id}', function ($id){
    //$task = DB::table('tasks')->where('id', '=', $id)->get();
    $task = App\Task::find($id);
    return $task;
});

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/create','TaskController@create');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{id}/edit', 'TaskController@edit');
Route::get('/tasks/{id}','TaskController@show');



