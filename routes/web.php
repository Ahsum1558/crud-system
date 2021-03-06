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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Student'], function(){
	// All Students Route
	Route::get('/student', 'StudentController@index');
	Route::get('/student/create', 'StudentController@create');
	Route::post('/student/store', 'StudentController@store');
	Route::get('/student/show/{id}', 'StudentController@show');
	Route::get('/student/destroy/{id}', 'StudentController@destroy');
	Route::get('/student/edit/{id}', 'StudentController@edit');
	Route::post('/student/update/{id}', 'StudentController@update');
});





// Route::get('student', function(){
// 	return view('student.index');
// });
// Route::get('student/create', function(){
// 	return view('student.create');
// });
// Route::get('student/show', function(){
// 	return view('student.show');
// });
