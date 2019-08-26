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

Route::get('/app', function() {
    return view('app');
});

Route::get('/', function () {

    $tasks = [

        'Save Ceku!',
        'Destroy the Fire Ball!',

    ];

    return view('welcome')->withTasks($tasks);
});

Route::get('/cungo', function () {
    return view('Cungo');
});

Route::get('/contact', function () {
    return view('Contact');
});

/*Route::get('/flights', function () {
    return view('/flights/store');
});*/


Route::resource('/flights', 'FlightsController');
/*Route::get('/flights', 'FlightsController@index');
Route::get('/flights/{flight}', 'FlightsController@show');
Route::get('/flights/create', 'FlightsController@create');
Route::post('/flights', 'FlightsController@store');
Route::get('/flights/{flight}/edit', 'FlightsController@edit');
Route::patch('/flights/{flight}', 'FlightsController@update');
Route::delete('/flights/{flight}', 'FlightsController@destroy');*/

//Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/flights/{flight}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@store');